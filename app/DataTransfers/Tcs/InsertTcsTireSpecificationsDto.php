<?php

namespace App\DataTransfers\Tcs;

use App\Models\Tcs\TcsTypeEnum;
use Illuminate\Contracts\Support\Arrayable;

/**
 * DTO для передачи строки из файла импорта подбора шин и дисков по автомобилю
 *
 */
class InsertTcsTireSpecificationsDto implements Arrayable
{
    public function __construct(
        public int $tcs_car_model_id,
        public TcsTypeEnum $type,
        public int $front_width,
        public int $front_height,
        public int $front_diameter,
        public ?string $back_width = null,
        public ?string $back_height = null,
        public ?string $back_diameter = null,
    )
    {}

    public function toArray()
    {
        return (array) $this;
    }
}
