<?php

namespace App\Models\Tcs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $tcs_car_model_id
 * @property TcsTypeEnum $type
 * @property int $front_width
 * @property int $front_height
 * @property int $front_diameter
 * @property ?int $back_width
 * @property ?int $back_height
 * @property ?int $back_diameter
 * @property-read string $name
 *
 */
class TcsTireSpecification extends Model
{
    use HasFactory;

    protected $table = 'tcs_tyre_specifications';

    protected $fillable = [
        'tcs_car_model_id',
        'type',
        'front_width',
        'front_height',
        'front_diameter',
        'back_width',
        'back_height',
        'back_diameter',
    ];

    protected $casts = [
        'type' => TcsTypeEnum::class,
    ];

    public function getNameAttribute()
    {
        $name = $this->front_width . '/' . $this->front_height . ' R' . $this->front_diameter;

        return empty($this->back_width) ? $name : $name . ' - ' . $this->back_width . '/' . $this->back_height . ' R' . $this->back_diameter;
    }
}
