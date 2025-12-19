<?php

namespace App\Traits;

trait HandlesPaginationAndSorting
{
    protected function applyPaginationAndSorting($query, $defaultSortBy = 'created_at', $defaultSortOrder = 'desc', $defaultPerPage = 10, $defaultCurrentPage = 1)
    {
        // Get page count from the request, default to 10 if not specified
        $perPage = request()->input('per_page', $defaultPerPage);
        $currentPage = request()->input('current_page', $defaultCurrentPage);

        // Get sorting parameters from the request, default to sorting by created_at
        $sortBy = request()->input('sort_by', $defaultSortBy);
        $sortOrder = request()->input('sort_order', $defaultSortOrder);

        // Apply sorting to the query
        $query->orderBy($sortBy, $sortOrder);

        // Paginate the results with the specified page count
        return $query->paginate($perPage, ['*'], 'List', $currentPage);
    }
}
