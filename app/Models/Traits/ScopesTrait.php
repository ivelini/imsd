<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;


trait ScopesTrait
{
    /**
     * Фильтрация
     */
    public function scopeFilter(Builder $query, ?string $filters): Builder
    {
        return $query->when($filters, function ($query, string $filters) {
            $filters = explode(';', $filters);

            $columns = $this->getColumns();

            foreach ($filters as $filter) {
                [$column, $values] = explode('|', $filter);

                $values = explode(',', $values);

                if (in_array($column, $columns)) {
                    $query->whereIn($column, $values);
                }
            }
        });
    }

    /**
     * Получить колонки
     */
    public function getColumns(): array
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
