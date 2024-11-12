<?php

namespace Elephant\Transformers\Pagination\Contacts;

use Elephant\Transformers\Contracts\Transformer;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as RawBuilder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface Paginator
{
    public function paginate(Builder|RawBuilder $builder, Transformer $transformer = null): LengthAwarePaginator;

    public function pageName(): string;

    public function perPageName(): string;

    public function meta(): array;

    public function links(): array;
}