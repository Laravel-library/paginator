<?php

namespace Dingo\Paginator\Resources;

use Dingo\Paginator\Resources\Contacts\Resources;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Dingo\Paginator\Resources\Exception\MethodNotExistsException;

/**
 * @method static array collection(\Illuminate\Database\Eloquent\Builder|Builder $builder)
 * @method static array resource(Model $model)
 * @method static Resources extra(array $values)
 */
trait Macro
{
    public static function __callStatic(string $name, array $arguments): array
    {
        $transformResource = (new ResourceGenerator())->makeResource(new self());

        if (!method_exists($transformResource, $name)) {
            throw new MethodNotExistsException('Method [' . $name . '] does not exists.');
        }

        return $transformResource->{$name}(...$arguments);
    }
}