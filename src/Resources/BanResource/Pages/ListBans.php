<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;

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
