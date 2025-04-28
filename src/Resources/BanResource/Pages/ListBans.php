<?php

declare(strict_types=1);

namespace Rectitudeopen\FilamentBanManager\Resources\BanResource\Pages;

use Rectitudeopen\FilamentBanManager\Resources\BanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBans extends ListRecords
{
    protected static string $resource = BanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
