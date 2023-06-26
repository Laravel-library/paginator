<?php

namespace Xgbnl\Paginator\Resource;

use Illuminate\Database\Eloquent\Model;
use Xgbnl\Paginator\Resource\Contacts\ResourceCaller;

class Test implements \Xgbnl\Paginator\Resource\Contacts\Transformer
{
    use ResourceInstantiator,ResourceCaller;

    public function transform(Model $model): array
    {
        // TODO: Implement transform() method.
    }
}