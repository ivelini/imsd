<?php

namespace App\Models;

use App\DataTransfers\Tire\ParametersDto;
use App\Models\Interfaces\FilterAndSortInterface;
use App\Models\Traits\FilterTrait;
use App\Models\Traits\SortTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * @return void
     */
    public function getMinimumPriceFromStocksAttribute()
    {
        return $this->stocks->min('inside.price');
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
    public function scopeJoinPrice(Builder $query): Builder
    {
        return $query->selectRaw('min(tire_stock.price) as price, tires.*')
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