<?php

namespace TallStackUIFilament\TallStackUIFilament\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallStackUIFilament\TallStackUIFilament\TallStackUIFilament
 */
class TallStackUIFilament extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TallStackUIFilament\TallStackUIFilament\TallStackUIFilament::class;
    }
}
