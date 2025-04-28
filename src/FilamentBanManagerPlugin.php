<?php

namespace Rectitudeopen\FilamentBanManager;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentBanManagerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-ban-manager';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                // PostResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
