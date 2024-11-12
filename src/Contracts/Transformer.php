<?php

namespace Elephant\Transformers\Contracts;

use Illuminate\Database\Eloquent\Model;

interface Transformer
{
    public function transform(Model $model): array;
}