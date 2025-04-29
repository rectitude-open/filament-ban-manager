<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Models;

use Mchev\Banhammer\Models\Ban as BaseBan;

class Ban extends BaseBan
{
    protected $fillable = [
        'bannable_type',
        'bannable_id',
        'created_by_type',
        'created_by_id',
        'comment',
        'ip',
        'expired_at',
        'metas',
    ];
}
