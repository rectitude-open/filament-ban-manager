<?php

namespace RectitudeOpen\FilamentBanManager;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;

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
                config('filament-ban-manager.filament_resource', BanResource::class),
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
