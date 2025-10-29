<?php

namespace Backstage\Components\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Backstage\Components\Components
 */
class Components extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Backstage\Components\Components::class;
    }
}
