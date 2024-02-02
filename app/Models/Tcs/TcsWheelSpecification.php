<?php

namespace App\Models\Tcs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TcsWheelSpecification extends Model
{
    use HasFactory;

    protected $table = 'tcs_wheel_specifications';

    protected $fillable = [
        'tcs_car_model_id',
        'type',
        'front_width',
        'front_diameter',
        'front_et',
        'back_width',
        'back_diameter',
        'back_et',
    ];

    protected $casts = [
        'type' => TcsTypeEnum::class,
    ];
}
