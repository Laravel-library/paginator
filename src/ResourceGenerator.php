<?php

namespace Elephant\Transformers;

use Elephant\Transformers\Contracts\ResourceFactory;
use Elephant\Transformers\Contracts\Resources;
use Elephant\Transformers\Contracts\Transformer;
use Elephant\Transformers\State\DataAccess;

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