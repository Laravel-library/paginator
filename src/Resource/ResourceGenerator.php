<?php

namespace Dingo\Paginator\Resource;

use Dingo\Paginator\Resource\Contacts\ResourceFactory;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Contacts\Transformer;

readonly class ResourceGenerator implements ResourceFactory
{

    public function newResource(?Transformer $transformer): Resources
    {
        return new \Dingo\Paginator\Resource\Transformer($this->prepareTransformer($transformer));
    }

    protected function prepareTransformer(?Transformer $transformer): Transformer
    {
        return is_null($transformer) ? new SpecialTransformer() : $transformer;
    }
}