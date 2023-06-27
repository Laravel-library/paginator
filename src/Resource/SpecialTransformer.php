<?php

declare(strict_types=1);

namespace Dingo\Paginator\Resource;

use Illuminate\Database\Eloquent\Model;

class SpecialTransformer implements Contacts\Transformer
{

    public function transform(Model $model): array
    {
        return $model->toArray();
    }
}