<?php

namespace App\Services\Grouper\GroupWorkers;

use Illuminate\Support\Collection;

abstract class  GroupWorker
{
    protected Collection $items;
    public function setItems(Collection $items)
    {
        $this->items = $items;

        return $this;
    }

    abstract public function group(): Collection;
}
