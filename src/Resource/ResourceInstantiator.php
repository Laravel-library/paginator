<?php

namespace Dingo\Paginator\Resource;

use Dingo\Paginator\Resource\Contacts\Resources;

trait ResourceInstantiator
{
    public function newResource(\Dingo\Paginator\Resource\Contacts\Transformer $transformer): Resources
    {
        return new Transformer($transformer);
    }
}