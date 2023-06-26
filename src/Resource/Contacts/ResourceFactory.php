<?php

namespace Xgbnl\Paginator\Resource\Contacts;

interface ResourceFactory
{
    public function newResource(Transformer $transformer): Resources;
}