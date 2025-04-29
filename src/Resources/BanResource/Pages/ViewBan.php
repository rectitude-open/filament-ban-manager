<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Js;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;

class ViewBan extends ViewRecord
{
    protected static string $resource = BanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('cancel')
                ->label(__('filament-panels::resources/pages/create-record.form.actions.cancel.label'))
                ->alpineClickHandler('document.referrer ? window.history.back() : (window.location.href = ' . Js::from($this->previousUrl ?? static::getResource()::getUrl()) . ')')
                ->color('gray')
                ->icon('heroicon-o-arrow-left')
                ->label(__('action.back')),
        ];
    }
}
