<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;
use Filament\Notifications\Notification;

class ListBans extends ListRecords
{
    protected static string $resource = BanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    if (
                        (empty($data['bannable_type'] ?? null) || empty($data['bannable_id'] ?? null))
                        &&
                        (empty($data['ip'] ?? null))
                    ) {
                        Notification::make()
                            ->warning()
                            ->title('Bannable Model or IP is required')
                            ->send();
                        $this->halt();
                        return [];
                    }
                    return $data;
                })
        ];
    }
}
