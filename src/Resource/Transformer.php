<?php

declare(strict_types=1);

namespace Dingo\Paginator\Resource;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Contacts\Transformer as TransformerContact;

readonly class Transformer implements Resources
{
    protected TransformerContact $transformer;

    public function __construct(TransformerContact $transformer)
    {
        $this->transformer = $transformer;
    }

    public function collection(\Illuminate\Database\Eloquent\Builder|Builder $builder): array
    {
        $collections = $builder->get();

        return $collections->isEmpty() ? [] : $this->getResources($collections);
    }

    public function getResources(Collection|\Illuminate\Support\Collection $collection): array
    {
        return $collection->reduce(function (array $resources, Model $model) {

            $resources[] = $this->resource($model);

            return $resources;
        }, []);
    }

    public function resource(Model $model): array
    {
        return $this->transformer->transform($model);
    }
}