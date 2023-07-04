<?php

namespace Dingo\Paginator\Contacts;

interface Extractable
{
    public function extra(array $values): mixed;
}