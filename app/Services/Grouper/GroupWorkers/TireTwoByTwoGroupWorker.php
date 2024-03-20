<?php

namespace App\Services\Grouper\GroupWorkers;


use App\Http\Resources\Tire\TireResource;
use Illuminate\Support\Collection;


/**
 * Попарная группировка шин
 */
class  TireTwoByTwoGroupWorker extends GroupWorker
{
    public function group(): Collection
    {
        return $this->items
            ->groupBy('name')
            ->filter(fn($group) => $group->count() == 2)
            ->map(
                fn($group) => $group->sortBy('width')->values()->map(
                    fn($tire) => TireResource::make($tire)
                )
            )
            ->values();
    }
}
