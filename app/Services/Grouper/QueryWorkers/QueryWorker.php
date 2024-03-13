<?php

namespace App\Services\Grouper\QueryWorkers;

use App\Models\Tcs\TcsTireSpecification;
use App\Models\Tcs\TcsWheelSpecification;
use Illuminate\Database\Eloquent\Collection;

abstract class  QueryWorker
{
    public function __construct(
        protected TcsTireSpecification|TcsWheelSpecification $specification,
        protected ?string $filters,
        protected ?string $sort
    )
    {}

    abstract public function get(): Collection;
}
