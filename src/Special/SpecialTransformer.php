<?php

declare(strict_types=1);

namespace Dingo\Paginator\Special;

use Dingo\Paginator\Resource\Contacts;
use Illuminate\Database\Eloquent\Model;

final readonly class SpecialTransformer implements Contacts\Transformer
{

    public function transform(Model $model): array
    {
        return $model->toArray();
    }
}