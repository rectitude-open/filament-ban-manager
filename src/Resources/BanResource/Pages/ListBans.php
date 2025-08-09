<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Actions;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;

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
                            ->title(__('filament-ban-manager::filament-ban-manager.info.bannable_model_or_ip_required'))
                            ->send();
                        $this->halt();

                        return [];
                    }

                    $user = Filament::auth()->user();
                    $data['created_by_type'] = $user->getMorphClass();
                    $data['created_by_id'] = $user->getKey();

                    return $data;
                }),
        ];
    }
}
