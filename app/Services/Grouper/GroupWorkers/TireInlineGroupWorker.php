<?php

namespace App\Services\Grouper\GroupWorkers;


use App\Http\Resources\Tire\TireResource;
use Illuminate\Support\Collection;


class  TireInlineGroupWorker extends GroupWorker
{
    public function group(): Collection
    {
        return $this->items->map(fn($tire) => TireResource::make($tire));
    }
}
