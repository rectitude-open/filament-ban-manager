<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use RectitudeOpen\FilamentBanManager\Resources\BanResource;

class CreateBan extends CreateRecord
{
    protected static string $resource = BanResource::class;
}
