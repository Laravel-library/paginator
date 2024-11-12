<?php

namespace Elephant\Transformers;

use Elephant\Transformers\Commands\TransformerCommand;
use Illuminate\Support\ServiceProvider;

class ResourceServiceProvider extends ServiceProvider
{
    protected array $commands = [
        TransformerCommand::class,
    ];


    public function boot(): void
    {
        $this->registerCommand();
    }

    public function registerCommand(): void
    {
        $this->commands($this->commands);
    }
}