<?php

namespace Dingo\Paginator\Resource\Contacts;

interface ResourceFactory
{
    public function makeResource(?Transformer $transformer): Resources;
}