<?php

namespace App\Jobs\Import\Vihicle;

use App\Models\Tcs\TcsCarModel;
use App\Models\Tcs\TcsTypeEnum;

class ImporterOneCell
{
    private TcsCarModel $carModel;
    private TcsTypeEnum $type;

    private ImportBehaviorInterface $importBehavior;


    public function setCarModel(TcsCarModel $carModel)
    {
        $this->carModel = $carModel;
        return $this;
    }

    public function setType(TcsTypeEnum $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setImporter(ImportBehaviorInterface $importer)
    {
        $this->importBehavior = $importer;
        return $this;
    }

    public function import(string $cell)
    {
        $this->importBehavior->import($cell, $this->carModel, $this->type);
    }
}
