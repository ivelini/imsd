<?php

namespace App\Models\Interfaces;

use Illuminate\Database\Eloquent\Builder;

/**
 *Методы, необходимые для фильтрации
 */
interface FilterAndSortInterface
{
    /**
     * Билдер присоединения таблицы со прайсовыми значениями
     * @param Builder $query
     * @return Builder
     */
    public function scopeJoinPrice(Builder $query): Builder;

    /**
     * Реализация фильтрации сезона. Если сезона нет, то вернуть $query без изменений.
     * @param Builder $query
     * @param array $values
     * @return Builder
     */
    public function filterSeason(Builder $query, array $values): Builder;
}
