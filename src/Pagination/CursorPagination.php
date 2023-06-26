<?php

namespace Xgbnl\Paginator\Pagination;

use Xgbnl\Paginator\Pagination\Contacts\Paginator;
use Xgbnl\Paginator\Resource\Contacts\ResourceFactory;
use Xgbnl\Paginator\Resource\ResourceInstantiator;
use Xgbnl\Paginator\Resource\Test;

readonly class CursorPagination implements Paginator, ResourceFactory
{
    use ResourceInstantiator;

    public function paginate(): mixed
    {

    }


}