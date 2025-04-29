<?php

namespace RectitudeOpen\FilamentBanManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentBanManager\FilamentBanManager
 */
class FilamentBanManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentBanManager\FilamentBanManager::class;
    }
}
