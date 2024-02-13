<?php

namespace App\Jobs\Import\Vihicle;

use App\DataTransfers\Tcs\ImportVehicleDto;
use App\DataTransfers\Tcs\InsertTcsTireSpecificationsDto;
use App\Models\Tcs\TcsCarModel;
use App\Models\Tcs\TcsTypeEnum;
use App\Models\Tcs\TcsTireSpecification;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImportVehicleJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $importerOneCell;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $path, // Полный путь до файла
        public int $fullRows, //Всего строк в файле
        public int $offset = 1, //С какой строки начать парсинг
        public int $limit = 1000, //Количество строк в задании
    )
    {
        $this->onQueue('import-vehicle');
        $this->importerOneCell = new ImporterOneCell;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Очищаем базу при первом задании
        if ($this->offset == 1) {
            DB::table('tcs_tyre_specifications')->truncate();
            DB::table('tcs_wheel_specifications')->truncate();
            DB::table('tcs_car_models')->truncate();

            Cache::clear();
        }

        foreach($this->rowsGenerator($this->path) as $key => $row) {

            if ($key > $this->offset + $this->limit) {
                break;
            }

            if ($key >= $this->offset) {
                $data = explode(';', $row);

                //Импортируем только данные по моделям от 2000 года
                if (isset($data[4]) && $data[4] >= 2000) {
                    $this->import(new ImportVehicleDto(
                        $data[0],
                        $data[2],
                        $data[3],
                        $data[4],
                        $data[5],
                        $data[6],
                        $data[7],
                        $data[8],
                        $data[9],
                        $data[10],
                        $data[11],
                        $data[12],
                        $data[13],
                        $data[14],
                    ));
                }
            }
        }

        //Если следующее смещение меньще общего количества строк, то ставим в новое задание
        if ($this->offset + $this->limit <= $this->fullRows) {
            ImportVehicleJob::dispatch($this->path, $this->fullRows, $this->offset + $this->limit);
        } else {
            Storage::delete($this->path);
        }
    }

    /**
     * Генератор перебора строк в файле
     * @param string $path путь до файла
     */
    private function rowsGenerator($path): \Generator
    {
        $rows = [];
        $file = fopen($path, 'r');
        while(!feof($file)) {
            yield $rows[] = trim(fgets($file));
        }
        fclose($file);
    }

    /**
     * @param ImportVehicleDto $vehicleDto
     * @return void
     */
    private function import(ImportVehicleDto $vehicleDto): void
    {
        $carModel = TcsCarModel::firstOrCreate(
            [
            'vendor' => $vehicleDto->vendor,
            'model' => $vehicleDto->model,
            'year' => $vehicleDto->year,
            'modification' => $vehicleDto->modification,
            ],
            [
                'lz' => $vehicleDto->lz,
                'pcd' => $vehicleDto->pcd,
                'dia' => $vehicleDto->dia,
                'bolt' => $vehicleDto->bolt,

            ]);

        //Импорт значений шин
        $this->importerOneCell->setCarModel($carModel)
            ->setImporter(new TireCellImporter);

        //Парсинг заводских значений размеров шин
        if(! empty($vehicleDto->default_tire)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::default)
                ->import($vehicleDto->default_tire);
        }

        //Парсинг альтернативных значений размеров шин
        if(! empty($vehicleDto->alternative_tire)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::alternative)
                ->import($vehicleDto->alternative_tire);
        }

        //Парсинг тюнинг значений размеров шин
        if(! empty($vehicleDto->tuning_tire)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::tuning)
                ->import($vehicleDto->tuning_tire);
        }

        //Импорт значений дисков
        $this->importerOneCell->setCarModel($carModel)
            ->setImporter(new WheelCellImporter);

        //Парсинг заводских значений размеров дисков
        if(! empty($vehicleDto->default_wheel)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::default)
                ->import($vehicleDto->default_wheel);
        }

        //Парсинг альтернативных значений размеров дисков
        if(! empty($vehicleDto->alternative_wheel)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::alternative)
                ->import($vehicleDto->alternative_wheel);
        }

        //Парсинг тюнинг значений размеров дисков
        if(! empty($vehicleDto->tuning_wheel)) {
            $this->importerOneCell
                ->setType(TcsTypeEnum::tuning)
                ->import($vehicleDto->tuning_wheel);
        }
    }
}
