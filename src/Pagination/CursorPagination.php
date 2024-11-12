<?php

declare(strict_types=1);

namespace Elephant\Transformers\Pagination;

use Elephant\Transformers\Contracts\ResourceFactory;
use Elephant\Transformers\Contracts\Transformer;
use Elephant\Transformers\Pagination\Contacts\Paginator;
use Elephant\Transformers\ResourceGenerator;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

final class CursorPagination implements Paginator
{

    protected readonly Request $request;

    protected readonly ResourceGenerator $resourceGenerator;

    protected ?CursorPaginator $cursorPaginator = null;

    public function __construct(Request $request, ResourceFactory $resourceGenerator)
    {
        $this->request = $request;

        $this->resourceGenerator = $resourceGenerator;
    }

    public function paginate(Builder|RawBuilder $builder, Transformer $transformer = null): LengthAwarePaginator
    {
        $cursor = $this->prepareCursorPaginator($builder);

        $resources = Collection::make($cursor->items());

        $items = $this->resourceGenerator->makeResource($transformer)->getResources($resources);

        return new BoundaryPaginator($items, $this->getPerPage(), $this->getPage(), $this);
    }

    protected function prepareCursorPaginator(Builder|RawBuilder $builder): CursorPaginator
    {
        return $this->cursorPaginator = $builder->cursorPaginate(
            perPage: $this->getPerPage(), cursorName: $this->pageName(), cursor: $this->getPage()
        );
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