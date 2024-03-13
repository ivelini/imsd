<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;


/**
 * Сортировка
 */
trait SortTrait
{
    public function scopeSort(Builder $query, ?string $sorts): Builder
    {
        return $query->when($sorts, function ($query, string $sorts) {
            $sorts = explode(';', $sorts);

            $columns = $this->getConnection()
                ->getSchemaBuilder()
                ->getColumnListing($this->getTable());

            foreach ($sorts as $sort) {
                [$column, $value] = explode('|', $sort);

                if (in_array($column, $columns)) {
                    $query->orderBy($column, $value);
                    continue;
                }

                if ($column == 'price') {
                    $query = $this->orderByPrice($query, $value);
                }
            }
        });
    }

    private function orderByPrice(Builder $query, string $sort): Builder
    {
        return $query->orderBy('price', $sort);
    }
}
