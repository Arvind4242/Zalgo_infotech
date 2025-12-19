<?php

namespace App\Filters;

use Abbasudo\Purity\Filters\Filter;
use Closure;
use Illuminate\Database\Eloquent\Builder;

class LikeFilter extends Filter
{
    /**
     * Operator string to detect in the query params.
     */
    protected static string $operator = '$like';

    /**
     * Apply filter logic to $query.
     */
    public function apply(): Closure
    {
        return function (Builder $query) {
            foreach ($this->values as $filter) {
                $query->where($this->column, 'like', '%'.$filter.'%');
            }
        };
    }
}
