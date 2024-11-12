<?php

namespace Elephant\Transformers\Pagination;

use Elephant\Transformers\Contracts\Transformer;
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

    }

    public function perPageName(): string
    {

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