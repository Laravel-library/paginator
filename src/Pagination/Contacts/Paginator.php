<?php

namespace Dingo\Paginator\Pagination\Contacts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface Paginator
{
    public function paginate(): LengthAwarePaginator;

    public function pageName(): string;

    public function perPageName(): string;

    public function meta(): array;

    public function links(): array;
}