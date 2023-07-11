<?php

namespace Dingo\Paginator\Pagination\Contacts;

use Dingo\Paginator\Resources\Contacts\Transformer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;

interface Paginator
{
    public function paginate(Builder|RawBuilder $builder, Transformer $transformer = null): LengthAwarePaginator;

    public function pageName(): string;

    public function perPageName(): string;

    public function meta(): array;

    public function links(): array;
}