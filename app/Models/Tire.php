<?php

namespace App\Models;

use App\DataTransfers\Tire\ParametersDto;
use App\Models\Interfaces\FilterAndSortInterface;
use App\Models\Tcs\TcsTireSpecification;
use App\Models\Traits\FilterTrait;
use App\Models\Traits\SortTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\HigherOrderWhenProxy;

/**
 * Шины
 *
 * @property int $id
 * @property int $vendor_id
 * @property int $season_id
 * @property int $country_id
 * @property string $product_article
 * @property string $name
 * @property int $width
 * @property int $height
 * @property string $diameter
 * @property boolean $is_runflat
 * @property boolean $is_spike
 * @property string $description
 * @property ParametersDto $parameters
 * @property int $minimum_price_from_stocks     Минимальная цена на складе
 * @property int $total_count_all_stocks        Сумма на всех складах
 *
 * @property Builder $sort
 * @property Builder $filter
 * @property Builder $joinPrice
 * @property Builder $filterSeason
 * @property Builder $filterTcsTireSpecification
 */
class Tire extends Model implements FilterAndSortInterface
{
    use HasFactory, FilterTrait, SortTrait;

    protected $fillable = [
        'vendor_id',
        'season_id',
        'country_id',
        'product_article',
        'name',
        'width',
        'height',
        'diameter',
        'is_runflat',
        'is_spike',
        'description',
        'parameters'
    ];

    protected $casts = [
        'is_runflat' => 'boolean',
        'is_spike' => 'boolean',
        'parameters' => ParametersDto::class
    ];

    /**
     * Минимальная цена по складам
     * @return int
     */
    public function getMinimumPriceFromStocksAttribute(): int
    {
        return $this->stocks->min('inside.price');
    }

    /**
     * Количество на всех складах
     * @return int
     */
    public function getTotalCountAllStocksAttribute(): int
    {
        return $this->stocks->sum('inside.count');
    }

    /**
     * Склады
     * @return BelongsToMany
     */
    public function stocks(): BelongsToMany
    {
        return $this->belongsToMany(Stock::class, 'tire_stock', 'tire_id', 'stock_id')
            ->as('inside')
            ->withPivot(['count', 'price', 'minimum_market_price']);
    }


    /**
     * Присоединяем таблице "tire_stock", группируем по "tires.id" и берем минимальное значение "tire_stock.price"
     * @param Builder $query
     * @return Builder
     */
    public function scopeJoinPrice(Builder $query, bool $includeTiresAll = true): Builder
    {
        $slectRaw = $includeTiresAll ?
            'min(tire_stock.price) as price, sum(tire_stock.count) as total_count, tires.*' :
            'min(tire_stock.price) as price, sum(tire_stock.count) as total_count';

        return $query
            ->selectRaw($slectRaw)
            ->join('tire_stock', 'tires.id', '=', 'tire_stock.tire_id')
            ->groupBy('tires.id');
    }

    /**
     * Реализация фильтрации сезона. Если сезона нет, то вернуть $query без изменений.
     * @param Builder $query
     * @param array $values
     * @return Builder
     */
    public function filterSeason(Builder $query, array $values): Builder
    {
        return $query->whereHas('season', function (Builder $query) use ($values) {
            $query->whereIn('id', $values);
        });
    }

    /**
     * Запрос шин по спецификации
     *
     * @param Builder $query
     * @param TcsTireSpecification $tireSpecification
     * @return Builder|HigherOrderWhenProxy
     */
    public function scopeFilterTcsTireSpecification(Builder $query, TcsTireSpecification $tireSpecification)
    {
        return $query
            ->where('width', $tireSpecification->front_width)
            ->where('height', $tireSpecification->front_height)
            ->where('diameter', 'like', $tireSpecification->front_diameter)
            ->when($tireSpecification->back_width, fn($query, $back_width) => $query
                ->orWhereRaw(
                    '(tires.width = ? and tires.height = ? and tires.diameter like ?)',
                    [$tireSpecification->back_width, $tireSpecification->back_height, $tireSpecification->back_diameter]
                )
            );
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
