<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class MenuGenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'menugen';
    }
}
