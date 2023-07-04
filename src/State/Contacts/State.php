<?php

namespace Dingo\Paginator\State\Contacts;

interface State
{
    public function store(array $values): self;

    public function merge(array $values): array;
}