<?php

declare(strict_types=1);

namespace Elephant\Transformers;

use Elephant\Transformers\Contracts\Transformer;
use Illuminate\Database\Eloquent\Model;

final readonly class AnonymousTransformer implements Transformer
{

    public function transform(Model $model): array
    {
        return $model->toArray();
    }
}