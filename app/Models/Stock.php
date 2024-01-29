<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
