<?php

namespace Dingo\Paginator\Resource;

use Dingo\Paginator\Resource\Contacts\Resources;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\Resource\Exception\MethodNotExistsException;

/**
 * @method static array collection(\Illuminate\Database\Eloquent\Builder|Builder $builder)
 * @method static array resource(Model $model)
 * @method static Resources extra(array $values)
 */
trait ResourceCaller
{
    public static function __callStatic(string $name, array $arguments): array
    {
        $transformResource = (new ResourceGenerator())->newResource(new self());

        if (!method_exists($transformResource, $name)) {
            throw new MethodNotExistsException('Method [' . $name . '] does not exists.');
        }

        return $transformResource->{$name}(...$arguments);
    }
}