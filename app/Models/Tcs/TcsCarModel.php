<?php

namespace App\Models\Tcs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TcsCarModel extends Model
{
    use HasFactory;

    protected $table = 'tcs_car_models';

    protected $fillable = [
        'vendor',
        'model',
        'year',
        'modification',
        'lz',
        'pcd',
        'dia',
        'bolt',
    ];

    public function tireSpecifications()
    {
        return $this->hasMany(TcsTireSpecification::class, 'tcs_car_model_id', 'id');
    }
}
