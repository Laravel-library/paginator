<?php

namespace Dingo\Paginator\Commands;

use Illuminate\Console\Command;

class TransformCommand extends Command
{
    protected $signature = 'make:transformer';

    protected $description = 'Create a new transformer.';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/transformer.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Transformers';
    }
}