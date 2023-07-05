<?php

declare(strict_types=1);

namespace Dingo\Paginator\Resource;

use Dingo\Paginator\Resource\Contacts\Transformer;
use Illuminate\Database\Eloquent\Model;

final readonly class AnonymousTransformer implements Transformer
{

    public function transform(Model $model): array
    {
        return $model->toArray();
    }
}