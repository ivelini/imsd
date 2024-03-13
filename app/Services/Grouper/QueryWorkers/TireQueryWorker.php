<?php

namespace App\Services\Grouper\QueryWorkers;

use App\Models\Tire;
use Illuminate\Database\Eloquent\Collection;

class TireQueryWorker extends QueryWorker
{
    public function get(): Collection
    {
        return Tire::query()
            ->select([
                'id',
                'product_article',
                'vendor_id',
                'country_id',
                'season_id',
                'is_runflat',
                'is_spike',
                'name',
                'width',
                'height',
                'diameter',
            ])
            ->with('country', 'season', 'vendor')
            ->joinPrice(false)
            ->filterTcsTireSpecification($this->specification)
            ->filter($this->filters)
            ->sort($this->sort)
            ->get();
    }
}
