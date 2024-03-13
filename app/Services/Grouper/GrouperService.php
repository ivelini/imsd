<?php

namespace App\Services\Grouper;

use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tcs\TcsWheelSpecification;
use App\Services\Grouper\GroupWorkers\GroupWorker;
use App\Services\Grouper\GroupWorkers\TireInlineGroupWorker;
use App\Services\Grouper\GroupWorkers\TireTwoByTwoGroupWorker;
use App\Services\Grouper\QueryWorkers\QueryWorker;
use App\Services\Grouper\QueryWorkers\TireQueryWorker;

/**
 * Получение и группировка шин и дисков, исходя из переданной спецификации
 */
class GrouperService
{
    protected QueryWorker $queryWorker;
    protected GroupWorker $groupWorker;

    public function __construct(
        public TcsTireSpecification|TcsWheelSpecification $specification,
        public ?string $filters,
        public ?string $sort
    )
    {
        if ($this->specification instanceof TcsTireSpecification) {

            $this->queryWorker = new TireQueryWorker($this->specification, $this->filters, $this->sort);
            $this->groupWorker = $this->specification->back_width == null ?
                new TireInlineGroupWorker :
                new TireTwoByTwoGroupWorker;
        }
    }

    public function run()
    {
        $items = $this->queryWorker->get();

        return $this->groupWorker->setItems($items)->group();
    }
}
