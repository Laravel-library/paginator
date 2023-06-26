<?php

namespace Xgbnl\Paginator\Resource\Contacts;

use Illuminate\Database\Eloquent\Model;

interface Transformer
{
    public function transform(Model $model): array;
}