<?php

namespace Dingo\Paginator\Resource;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Exception\MethodNotExistsException;

/**
 * @method static array collection(\Illuminate\Database\Eloquent\Builder|Builder $builder)
 * @method static array resource(Model $model)
 */
trait ResourceCaller
{
    public static function __callStatic(string $name, array $arguments): array
    {
        $transformResource = self::makeResource();

        if (!method_exists($transformResource, $name)) {
            throw new MethodNotExistsException('Method [' . $name . '] does not exists.');
        }

        return $transformResource->{$name}(...$arguments);
    }

    private static function makeResource(): Resources
    {
        $that = new self();

        return $that->newResource($that);
    }
}