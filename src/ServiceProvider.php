<?php

namespace Dingo\Paginator;

use Dingo\Paginator\Commands\TransformCommand;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\Transformer;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected array $commands = [
        TransformCommand::class,
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