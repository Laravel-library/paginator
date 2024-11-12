<?php

namespace Elephant\Transformers\Contracts;

use Elephant\Transformers\Contacts\Extractable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

interface Resources extends Extractable
{
    public function collection(Builder|\Illuminate\Database\Eloquent\Builder $builder): array;

    public function getResources(Collection|\Illuminate\Support\Collection $collection): array;

    public function resource(Model $model): array;
}