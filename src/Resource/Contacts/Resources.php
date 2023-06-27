<?php

namespace Dingo\Paginator\Resource\Contacts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

interface Resources
{
    public function collection(Builder|\Illuminate\Database\Eloquent\Builder $builder): array;

    public function getResources(Collection|\Illuminate\Support\Collection $collection): array;

    public function resource(Model $model): array;
}