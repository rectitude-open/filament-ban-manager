<?php

declare(strict_types=1);

namespace Rectitudeopen\FilamentBanManager\Resources\BanResource\Actions;

use Filament\Actions\Concerns\CanCustomizeProcess;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Mchev\Banhammer\IP;

class UnbanAction extends Action
{
    use CanCustomizeProcess;

    public static function getDefaultName(): ?string
    {
        return 'unban';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('Unban'));

        $this->icon('heroicon-o-x-circle');

        $this->color('danger');

        $this->requiresConfirmation();

        $this->action(function (): void {
            $this->process(function (array $data, Model $record, Table $table) {
                /** @phpstan-ignore-next-line */
                if ($record->bannable_type && $record->bannable_id) {
                    $model = $record->bannable_type::find($record->bannable_id);
                    if ($model && method_exists($model, 'unban')) {
                        $model->unban();
                    }
                } else {
                    /** @phpstan-ignore-next-line */
                    IP::unban($record->ip);
                }
            });

            $this->success();
        });
    }
}
