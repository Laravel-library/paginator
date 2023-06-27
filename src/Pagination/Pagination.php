<?php

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Resource\Contacts\Transformer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Http\Request;

readonly class Pagination implements Contacts\Pagination
{
    public function __construct(protected Request $request)
    {
    }

    public function customPaginate(RawBuilder|Builder $builder, Transformer $transformer = null): Contacts\Paginator
    {

    }

    public function cursorPaginate(RawBuilder|Builder $builder, Transformer $transformer = null): Contacts\Paginator
    {

    }
}