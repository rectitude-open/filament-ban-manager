<?php

declare(strict_types=1);

namespace Rectitudeopen\FilamentBanManager\Resources\BanResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Rectitudeopen\FilamentBanManager\Resources\BanResource;

class CreateBan extends CreateRecord
{
    protected static string $resource = BanResource::class;
}
