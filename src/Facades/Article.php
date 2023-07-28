<?php

namespace Backpack\Pages\Facades;

use Illuminate\Support\Facades\Facade;

class Page extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'page';
    }
}
