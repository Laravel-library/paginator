<?php

namespace Xgbnl\Paginator;

use Xgbnl\Paginator\Commands\TransformCommand;
use Xgbnl\Paginator\Resource\Contacts\Resources;
use Xgbnl\Paginator\Resource\Transformer;

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