<?php

namespace Dingo\Paginator\Resources;

use Dingo\Paginator\Resources\Contacts\ResourceFactory;
use Dingo\Paginator\Resources\Contacts\Resources;
use Dingo\Paginator\Resources\Contacts\Transformer;
use Dingo\Paginator\State\DataAccess;

readonly class ResourceGenerator implements ResourceFactory
{

    public function makeResource(?Transformer $transformer): Resources
    {
        return new ResourceProcessor($this->prepareTransformer($transformer),new DataAccess());
    }

    protected function prepareTransformer(?Transformer $transformer): Transformer
    {
        return is_null($transformer) ? new AnonymousTransformer() : $transformer;
    }
}