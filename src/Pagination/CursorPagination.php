<?php

namespace Dingo\Paginator\Pagination;

use Dingo\Paginator\Pagination\Contacts\Paginator;
use Dingo\Paginator\Resource\Contacts\ResourceFactory;
use Dingo\Paginator\Resource\ResourceInstantiator;

readonly class CursorPagination implements Paginator, ResourceFactory
{
    use ResourceInstantiator;

    public function paginate(): mixed
    {

    }


}