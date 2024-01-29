<?php

namespace App\Jobs\Import;

use App\DataTransfers\Tire\ParametersDto;
use App\Exceptions\Import\MaxLimitException;
use App\Models\Country;
use App\Models\Season;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Tire;
use App\Models\Vendor;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\FastExcel\FastExcel;

class ImportTiresJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $path, // Полный путь до файла
        public int $fullRows, //Всего строк в файле
        public int $offset = 1, //С какой строки начать парсинг
        public int $limit = 1000, //Количество строк в задании
    )
    {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Текущий номер строки из файла
        $currentRowNumber = 1;
        //Количество итераций вставки
        $countIter = 1;

        //Методом выброса исключения выходим из обработчика импорта
        try {
            (new FastExcel)->import($this->path, function ($row) use (&$countIter, &$currentRowNumber) {

                //Если текущая строка больше или равна смещению, то вставляем в базу
                if($currentRowNumber >= $this->offset) {

                    //Если достигнут лимит по количеству полей
                    if($countIter > $this->limit) {
                        throw new MaxLimitException;
                    }

                    try {
                        $this->insert($row);
                    } catch (\Throwable $e) {
                        Log::channel('import')->debug('error', [
                            'num' => $currentRowNumber,
                            'error' => $e->getMessage(),
                            'row' => $row
                        ]);
                    }

                    $countIter++;
                }

                $currentRowNumber++;
            });
        } catch(MaxLimitException $e) {}

        //Если следующее смещение меньще общего количества строк, то ставим в новое задание
        if ($this->offset + $this->limit <= $this->fullRows) {
            ImportTiresJob::dispatch($this->path, $this->fullRows, $this->offset + $this->limit);
        } else {
            Storage::delete($this->path);
        }
    }

    /**
     * Вставка строки из файла в базу
     * @param array $row
     * @return void
     */
    private function insert(array $row): void
    {
        if ($row['width'] == '(пусто)') {
            return;
        }

        $vendor = Vendor::firstOrCreate(['name' => $row['vendor']]);
        $season = Season::firstOrCreate(['name' => $row['season']]);
        $country = Country::firstOrCreate(['name' => $row['country']]);


        $row['vendor_id'] = $vendor->id;
        $row['season_id'] = $season->id;
        $row['country_id'] = $country?->id;
        $row['is_runflat'] = !(gettype(stripos($row['is_runflat'], '')) == 'integer' || gettype(stripos($row['is_runflat'], 'Нет')) == 'integer');
        $row['is_spike'] = !(gettype(stripos($row['is_spike'], '')) == 'integer' || gettype(stripos($row['is_spike'], '-')) == 'integer');


        //Вставка в таблицу tires
        $tire = Tire::updateOrCreate(
            ['product_article' => $row['product_article']],
            [
                'vendor_id' => $row['vendor_id'],
                'season_id' => $row['season_id'],
                'country_id' => $row['country_id'],
                'name' => $row['name'],
                'width' => $row['width'],
                'height' => !empty($row['height']) ? $row['height'] : null,
                'diameter' => $row['diameter'],
                'is_runflat' => $row['is_runflat'],
                'is_spike' => $row['is_spike'],
                'parameters' => new ParametersDto(
                    $row['parameters_start_of_sales'],
                    $row['parameters_fuel_rate'],
                    $row['parameters_noise'],
                    $row['parameters_type_car'],
                    $row['parameters_control']
                ),
                'description' => $row['description'],
            ]
        );

        $supplier = Supplier::firstOrCreate(['name' => $row['supplier']]);

        $stock = Stock::firstOrCreate(
            ['name' => $row['stock']],
            ['supplier_id' => $supplier->id]
        );

        //Подключаем склады
        $tire->stocks()->syncWithoutDetaching([
            $stock->id => [
                'count' => $row['count'],
                'price' => round($row['price'], 0),
                'minimum_market_price' => !empty($row['minimum_market_price']) ? $row['minimum_market_price'] : null,
            ]
        ]);
    }
}
