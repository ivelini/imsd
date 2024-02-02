<?php

namespace App\Jobs\Import\Vihicle;

use App\DataTransfers\Tcs\InsertTcsTireSpecificationsDto;
use App\Models\Tcs\TcsCarModel;
use App\Models\Tcs\TcsTypeEnum;
use App\Models\Tcs\TcsTireSpecification;

/**
 *
 */
class TireCellImporter implements ImportBehaviorInterface
{
    public function import(string $cell, TcsCarModel $carModel, TcsTypeEnum $type): void
    {
        foreach (explode('|', $cell) as $tire) {

            $back = null;
            $front = $tire;

            if (stripos($tire, ',') !== false) {
                [$front, $back] = explode(',', $tire);
            }

            $front = $this->parseParameters($front);
            $back = $this->parseParameters($back);

            TcsTireSpecification::create(
                (new InsertTcsTireSpecificationsDto(
                    $carModel->id,
                    $type,
                    $front['width'],
                    $front['height'],
                    $front['diameter'],
                    $back['width'],
                    $back['height'],
                    $back['diameter'],
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
            'width' => (! empty($parameters)) ? substr($parameters, 0, stripos($parameters, '/')) : null,
            'height' => (! empty($parameters)) ? substr($parameters, stripos($parameters, '/') + 1, stripos($parameters, '/') - stripos($parameters, ' ') - 1) : null,
            'diameter' => (! empty($parameters)) ? substr($parameters, stripos($parameters, 'R') + 1) : null,
        ];
    }
}
