<?php

namespace RectitudeOpen\FilamentBanManager\Commands;

use Illuminate\Console\Command;

class FilamentBanManagerCommand extends Command
{
    public $signature = 'filament-ban-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
