<?php

namespace Elephant\Transformers\Contracts;

interface ResourceFactory
{
    public function makeResource(?Transformer $transformer): Resources;
}