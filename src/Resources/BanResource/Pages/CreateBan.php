<?php

declare(strict_types=1);

namespace Rectitudeopen\FilamentBanManager\Resources\BanResource\Pages;

use Rectitudeopen\FilamentBanManager\Resources\BanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBan extends CreateRecord
{
    protected static string $resource = BanResource::class;
}
