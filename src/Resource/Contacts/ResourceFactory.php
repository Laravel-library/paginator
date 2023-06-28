<?php

namespace Dingo\Paginator\Resource\Contacts;

interface ResourceFactory
{
    public function newResource(?Transformer $transformer): Resources;
}