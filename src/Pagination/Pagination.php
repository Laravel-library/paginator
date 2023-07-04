<?php

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Resource\Contacts\ResourceFactory;
use Dingo\Paginator\Resource\Contacts\Transformer;
use Dingo\Paginator\State\Contacts\State;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Http\Request;

final readonly class Pagination implements Contacts\Pagination
{
    protected Request $request;

    protected ResourceFactory $resourceFactory;

    protected State $state;

    public function __construct(Request $request, ResourceFactory $resourceFactory, State $state)
    {
        $this->request = $request;

        $this->resourceFactory = $resourceFactory;

        $this->state = $state;
    }

    public function customPaginate(RawBuilder|Builder $builder, Transformer $transformer = null): array
    {

    }

    public function cursorPaginate(RawBuilder|Builder $builder, Transformer $transformer = null): array
    {

    }

    public function extra(array $values): Contacts\Pagination
    {
        $this->state->store($values);

        return $this;
    }
}