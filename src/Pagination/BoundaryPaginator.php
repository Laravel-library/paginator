<?php

declare(strict_types=1);

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Pagination\Contacts\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

final class BoundaryPaginator extends LengthAwarePaginator
{
    protected Paginator $paginator;

    public function __construct(array $items, int $perPage, mixed $currentPage, Paginator $paginator)
    {
        $this->paginator = $paginator;

        parent::__construct($items, count($items), $perPage, $currentPage);
    }

    public function toArray(): array
    {
        return [
            'list'  => $this->items(),
            'meta'  => $this->paginator->meta(),
            'links' => $this->paginator->links(),
            'query' => [
                'pageName'    => $this->paginator->pageName(),
                'perPageName' => $this->paginator->perPageName(),
            ],
        ];
    }
}