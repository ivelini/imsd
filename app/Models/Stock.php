<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ramsey\Collection\Collection;

/**
 * Склад
 *
 * @property int $id
 * @property string $name
 * @property int $supplier_id
 * @property Supplier $supplier
 * @property Collection $tires
 */
class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'name'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    /**
     * Шины на данном складе
     * @return BelongsToMany
     */
    public function tires(): BelongsToMany
    {
        return $this->belongsToMany(Tire::class, 'tire_stock', 'stock_id', 'tire_id');
    }
}
