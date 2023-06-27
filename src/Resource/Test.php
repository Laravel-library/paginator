<?php

namespace Dingo\Paginator\Resource;

use Illuminate\Database\Eloquent\Model;

class Test implements \Dingo\Paginator\Resource\Contacts\Transformer
{
    use ResourceInstantiator,ResourceCaller;

    public function transform(Model $model): array
    {
        // TODO: Implement transform() method.
    }
}