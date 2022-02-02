<?php

namespace Pkeogan\LaravelLangTester;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pkeogan\LaravelLangTester\Skeleton\SkeletonClass
 */
class LaravelLangTesterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-lang-tester';
    }
}
