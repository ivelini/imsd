<?php

namespace App\DataTransfers\Tcs;

/**
 * DTO для передачи строки из файла импорта подбора шин и дисков по автомобилю
 *
 * @property string $vendor
 * @property string $model
 * @property string $modification
 * @property string $year
 *
 * @property string $default_tire
 * @property ?string $alternative_tire
 * @property ?string $tuning_tire
 *
 * @property string $default_wheel
 * @property ?string $alternative_wheel
 * @property ?string $tuning_wheel
 *
 * @property ?float $pcd
 * @property ?float $dia
 * @property ?int $lz
 * @property ?string $bolt
 *
 */
class ImportVehicleDto
{
    public ?float $pcd;
    public ?float $dia;
    public ?int $lz;

    public function __construct(
        public string $vendor,
        public string $model,
        public string $modification,
        public string $year,

        public ?string $default_tire = null,
        public ?string $alternative_tire = null,
        public ?string $tuning_tire = null,

        public string $default_wheel,
        public ?string $alternative_wheel = null,
        public ?string $tuning_wheel = null,

        ?string $pcd = null,
        ?string $dia = null,
        ?string $lz = null,
        public ?string $bolt = null,
    )
    {
        $this->pcd = ! empty($pcd) ? (float) $pcd : null;
        $this->dia = ! empty($dia) ? (float) $dia : null;
        $this->lz = ! empty($lz) ? (int) $lz : null;
    }
}
