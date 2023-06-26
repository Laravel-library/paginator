<?php

namespace Xgbnl\Paginator\Resource\Contacts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

interface Resources
{
    public function collection(Builder|\Illuminate\Database\Eloquent\Builder $builder): array;

    public function resource(Model $model): array;
}