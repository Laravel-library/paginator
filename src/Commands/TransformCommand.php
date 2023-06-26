<?php

namespace Xgbnl\Paginator\Commands;

use Illuminate\Console\Command;

class TransformCommand extends Command
{
    protected $signature = 'make:transform';

    protected $description = 'Create a new transform.';

    protected string $type = 'Transform';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/transform.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Transformers';
    }
}