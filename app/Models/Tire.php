<?php

namespace App\Models;


use App\Casts\Tire\ParametersCast;
use App\DataTransfers\Tire\ParametersDto;
use App\Models\Traits\ScopesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ramsey\Collection\Collection;

class Tire extends Model
{
    use HasFactory, ScopesTrait;

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
