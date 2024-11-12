<?php

namespace Elephant\Transformers\Contacts;

interface Extractable
{
    public function extra(array $values): mixed;
}