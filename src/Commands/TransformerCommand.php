<?php

namespace Elephant\Transformers\Commands;

use Illuminate\Console\GeneratorCommand;

class TransformerCommand extends GeneratorCommand
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