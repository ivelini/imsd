<?php

namespace App\Jobs\Import\Vihicle;

use App\DataTransfers\Tcs\InsertTcsTireSpecificationsDto;
use App\DataTransfers\Tcs\InsertTcsWheelSpecificationsDto;
use App\Models\Tcs\TcsCarModel;
use App\Models\Tcs\TcsTypeEnum;
use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tcs\TcsWheelSpecification;

/**
 *
 */
class WheelCellImporter implements ImportBehaviorInterface
{
    public function import(string $cell, TcsCarModel $carModel, TcsTypeEnum $type): void
    {
        foreach (explode('|', $cell) as $wheel) {

            $back = null;
            $front = $wheel;

            if (stripos($wheel, ',') !== false) {
                [$front, $back] = explode(',', $wheel);
            }

            $front = $this->parseParameters($front);
            $back = $this->parseParameters($back);

            TcsWheelSpecification::create(
                (new InsertTcsWheelSpecificationsDto(
                    $carModel->id,
                    $type,
                    $front['width'],
                    $front['diameter'],
                    $front['et'],
                    $back['width'],
                    $back['diameter'],
                    $back['et'],
                ))->toArray()
            );
        }
    }

    /**
     *
     * @param string $parameters
     * @return array|null[]
     */
    private function parseParameters(?string $parameters): array
    {
        return [
            'width' => (! empty($parameters)) ? trim(substr($parameters, 0, stripos($parameters, 'x'))) : null,
            'diameter' => (! empty($parameters)) ? trim(substr($parameters, stripos($parameters, 'x') + 1, stripos($parameters, 'E') - stripos($parameters, 'x') - 1)) : null,
            'et' => (! empty($parameters)) ? trim(substr($parameters, stripos($parameters, 'T') + 1)) : null,
        ];
    }
}
