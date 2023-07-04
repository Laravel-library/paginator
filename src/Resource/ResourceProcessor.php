<?php

declare(strict_types=1);

namespace Dingo\Paginator\Resource;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Contacts\Transformer;

final class ResourceProcessor implements Resources
{
    protected readonly Transformer $transformer;

    protected array $extra = [];

    public function __construct(Transformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function collection(\Illuminate\Database\Eloquent\Builder|Builder $builder): array
    {
        $collections = $builder->get();

        return $collections->isEmpty() ? [] : array_merge($this->getResources($collections), $this->extra);
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
        $resource = $this->transformer->transform($model);

        return array_merge($resource, $this->extra);
    }

    public function extra(array $values): Resources
    {
        $this->extra = $values;

        return $this;
    }
}