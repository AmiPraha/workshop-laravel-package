<?php

namespace AmiPraha\WorkshopLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AmiPraha\WorkshopLaravelPackage\WorkshopLaravelPackage
 */
class WorkshopLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'workshop-laravel-package';
    }
}
