<?php

declare(strict_types=1);

namespace Dingo\Paginator\Resources;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\State\Contacts\State;
use Dingo\Paginator\Resources\Contacts\Resources;
use Dingo\Paginator\Resources\Contacts\Transformer;

final readonly class ResourceProcessor implements Resources
{
    protected Transformer $transformer;

    protected State $state;

    public function __construct(Transformer $transformer, State $state)
    {
        $this->transformer = $transformer;

        $this->state = $state;
    }

    public function collection(\Illuminate\Database\Eloquent\Builder|Builder $builder): array
    {
        $collections = $builder->get();

        return $collections->isEmpty() ? [] : $this->state->merge($this->getResources($collections));
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

        return $this->state->merge($resource);
    }

    public function extra(array $values): Resources
    {
        $this->state->store($values);

        return $this;
    }
}