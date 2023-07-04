<?php

namespace Dingo\Paginator;

use Dingo\Paginator\Commands\TransformerCommand;
use Dingo\Paginator\Resource\Contacts\Resources;
use Dingo\Paginator\Resource\ResourceProcessor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
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