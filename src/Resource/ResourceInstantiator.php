<?php

namespace Xgbnl\Paginator\Resource;

use Xgbnl\Paginator\Resource\Contacts\Resources;

trait ResourceInstantiator
{
    public function newResource(\Xgbnl\Paginator\Resource\Contacts\Transformer $transformer): Resources
    {
        return new Transformer($transformer);
    }
}