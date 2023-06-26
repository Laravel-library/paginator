<?php

namespace Xgbnl\Paginator\Resource\Contacts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Xgbnl\Paginator\Resource\Exception\MethodNotExistsException;

/**
 * @method static array collection(\Illuminate\Database\Eloquent\Builder|Builder $builder)
 * @method static array resource(Model $model)
 */
trait ResourceCaller
{
    public static function __callStatic(string $name, array $arguments): array
    {
        $that = new self();

        if (!$that->hasMethod($name)) {
            throw new MethodNotExistsException('Method [' . $name . '] does not exists.');
        }

        return $that->newResource($that)->{$name}(...$arguments);
    }

    protected function hasMethod(string $name): bool
    {
        return in_array($name, $this->callMethods());
    }

    protected function callMethods(): array
    {
        return ['collection', 'resource'];
    }
}