<?php

namespace App\DataTransfers\Tire;

use App\Casts\Tire\ParametersCast;
use Illuminate\Contracts\Database\Eloquent\Castable;

class ParametersDto implements Castable
{
    public function __construct(
        public ?string $start_of_sales = null,
        public ?string $fuel_rate = null,
        public ?string $noise = null,
        public ?string $type_car = null,
        public ?string $control = null,
    )
    {}

    public static function castUsing(array $arguments)
    {
        return ParametersCast::class;
    }
}
