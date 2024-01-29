<?php

namespace App\Casts\Tire;

use App\DataTransfers\Tire\ParametersDto;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ParametersCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        $data = json_decode($value, true);

        return new ParametersDto(
            $data['start_of_sales'],
            $data['fuel_rate'],
            $data['noise'],
            $data['type_car'],
            $data['control'],
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (! $value instanceof ParametersDto) {
            $value = new ParametersDto(
                $value['start_of_sales'],
                $value['fuel_rate'],
                $value['noise'],
                $value['type_car'],
                $value['control']
            );
        }

        return json_encode($value);
    }
}