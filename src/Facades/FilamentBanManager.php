<?php

namespace Rectitudeopen\FilamentBanManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rectitudeopen\FilamentBanManager\FilamentBanManager
 */
class FilamentBanManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rectitudeopen\FilamentBanManager\FilamentBanManager::class;
    }
}
