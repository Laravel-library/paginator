<?php

namespace Xgbnl\Paginator\Pagination;

use Xgbnl\Paginator\Pagination\Contacts\Paginator;
use Xgbnl\Paginator\Resource\Contacts\Resources;
use Xgbnl\Paginator\Resource\Transformer;

readonly class CursorPagination implements Paginator
{

    public function paginate(): mixed
    {
        // TODO: Implement paginate() method.
    }

     protected function newResources(\Xgbnl\Paginator\Resource\Contacts\Transformer $transformer): Resources
    {
        return new Transformer($transformer);
    }
}