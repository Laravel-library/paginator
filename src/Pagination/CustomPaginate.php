<?php

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Resources\Contacts\Transformer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

readonly class CustomPaginate implements Contacts\Paginator
{

    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function paginate(RawBuilder|Builder $builder, Transformer $transformer = null): LengthAwarePaginator
    {

    }

    public function pageName(): string
    {
        // TODO: Implement pageName() method.
    }

    public function perPageName(): string
    {
        // TODO: Implement perPageName() method.
    }

    public function meta(): array
    {
        // TODO: Implement meta() method.
    }

    public function links(): array
    {
        // TODO: Implement links() method.
    }
}