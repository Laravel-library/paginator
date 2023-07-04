<?php

namespace Dingo\Paginator\State;

use Dingo\Paginator\State\Contacts\State;

final class DataAccess implements State
{

    protected array $container = [];

    public function store(array $values): DataAccess
    {
        $this->container = $values;

        return $this;
    }

    public function merge(array $values): array
    {
        return array_merge($this->container, $values);
    }
}