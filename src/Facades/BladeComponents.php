<?php

namespace Coasterkolja\BladeComponents\Facades;

use Illuminate\Support\Facades\Facade;
use Coasterkolja\BladeComponents\BladeComponents;

/**
 * @see \Coasterkolja\BladeComponents\BladeComponents
 */
class LaravelLuvi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BladeComponents::class;
    }
}
