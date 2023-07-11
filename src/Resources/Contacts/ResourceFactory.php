<?php

namespace Dingo\Paginator\Resources\Contacts;

interface ResourceFactory
{
    public function makeResource(?Transformer $transformer): Resources;
}