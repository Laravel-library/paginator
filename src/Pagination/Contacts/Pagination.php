<?php

namespace Dingo\Paginator\Pagination\Contacts;

use Dingo\Paginator\Resource\Contacts\Transformer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;

interface Pagination
{
    public function customPaginate(Builder|RawBuilder $builder, Transformer $transformer = null): Paginator;

    public function cursorPaginate(Builder|RawBuilder $builder, Transformer $transformer = null): Paginator;
}