<?php

namespace Huztw\BuildView\Facades;

use Illuminate\Support\Facades\Facade;

class BuildView extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'build-view';
    }
}
