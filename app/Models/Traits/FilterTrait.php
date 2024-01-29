<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;


/**
 * Фильтрация
 */
trait FilterTrait
{
    /**
     * Фильтрация
     */
    public function scopeFilter(Builder $query, ?string $filters): Builder
    {
        return $query->when($filters, function ($query, string $filters) {
            $filters = explode(';', $filters);

            $columns = $this->getConnection()
                ->getSchemaBuilder()
                ->getColumnListing($this->getTable());

            foreach ($filters as $filter) {
                [$column, $values] = explode('|', $filter);

                $values = explode(',', $values);

                if (in_array($column, $columns)) {
                    $query->whereIn($column, $values);
                    continue;
                }

                if ($column == 'price') {
                    $query = $this->filterBetweenPrice($query, $values);
                    continue;
                }

                if($column == 'vendor' || $column == 'country') {
                    $query->whereHas($column, function (Builder $query) use ($values) {
                        $query->whereIn('id', $values);
                    });
                    continue;
                }
                if ($column == 'season') {
                    $query = $this->filterSeason($query, $values);
                }
            }
        });
    }

    private function filterBetweenPrice($query, array $values): Builder
    {
        $min = $values[0];
        $max = $values[1] ?? $values[0];

        return $query->whereBetween('price', [$min, $max]);
    }
}
