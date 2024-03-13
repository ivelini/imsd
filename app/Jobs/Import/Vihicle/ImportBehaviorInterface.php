<?php

namespace App\Jobs\Import\Vihicle;

use App\Models\Tcs\TcsCarModel;
use App\Models\Tcs\TcsTypeEnum;

/**
 *
 */
interface ImportBehaviorInterface
{
    public function import(string $cell, TcsCarModel $carModel, TcsTypeEnum $type): void;
}
