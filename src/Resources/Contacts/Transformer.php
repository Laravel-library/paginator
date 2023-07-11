<?php

namespace Dingo\Paginator\Resources\Contacts;

use Illuminate\Database\Eloquent\Model;

interface Transformer
{
    public function transform(Model $model): array;
}