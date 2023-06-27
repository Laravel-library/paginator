<?php

declare(strict_types=1);

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Pagination\Contacts\Paginator;
use Dingo\Paginator\Resource\Contacts\ResourceFactory;
use Dingo\Paginator\Resource\Contacts\Transformer;
use Dingo\Paginator\Resource\ResourceInstantiator;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

final readonly class CursorPagination implements Paginator, ResourceFactory
{
    use ResourceInstantiator;

    protected Request $request;

    protected Builder|RawBuilder $builder;

    protected Transformer $transformer;

    public function __construct(Request $request, Builder|RawBuilder $builder, Transformer $transformer)
    {
        $this->request = $request;

        $this->builder = $builder;

        $this->transformer = $transformer;
    }

    public function paginate(): LengthAwarePaginator
    {
        $page = $this->getPage();

        $perPage = $this->getPerPage();

        $cursor = $this->builder->cursorPaginate(perPage: $perPage, cursorName: $this->pageName(), cursor: $page);

        $items = $this->newResource($this->transformer)->getResources(Collection::make($cursor->items()));

        return new BoundaryPaginator($items, $perPage, $page, $this);
    }

    protected function getPage(): mixed
    {
        return $this->request->get($this->pageName());
    }

    protected function getPerPage(): int
    {
        return (int)$this->request->get($this->perPageName(), 15);
    }

    public function pageName(): string
    {
        return 'pageNum';
    }

    public function perPageName(): string
    {
        return 'pageSize';
    }

    public function meta(): array
    {
        return [
            'hasMorePage' => false,
        ];
    }

    public function links(): array
    {
        return [

        ];
    }
}