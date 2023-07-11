<?php

namespace Dingo\Paginator\Pagination\Contacts;

use Dingo\Paginator\Resources\Contacts\Transformer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;

interface Pagination
{
    public function customPaginate(Builder|RawBuilder $builder, Transformer $transformer): array;

    public function cursorPaginate(Builder|RawBuilder $builder, Transformer $transformer): array;

    public function page(): string;

    public function perPage(): string;

    public function extra(array $values): self;
}