<?php

namespace Dingo\Paginator\Resource;

use Dingo\Paginator\Resource\Contacts\ResourceFactory;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Contacts\Transformer;
use Dingo\Paginator\Special\SpecialTransformer;
use Dingo\Paginator\State\DataAccess;

readonly class ResourceGenerator implements ResourceFactory
{

    public function newResource(?Transformer $transformer): Resources
    {
        return new ResourceProcessor($this->prepareTransformer($transformer),new DataAccess());
    }

    protected function prepareTransformer(?Transformer $transformer): Transformer
    {
        return is_null($transformer) ? new SpecialTransformer() : $transformer;
    }
}