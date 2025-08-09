<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources;

use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use RectitudeOpen\FilamentBanManager\Models\Ban;
use RectitudeOpen\FilamentBanManager\Resources\BanResource\Actions\UnbanAction;
use RectitudeOpen\FilamentBanManager\Resources\BanResource\Actions\UnbanBulkAction;
use RectitudeOpen\FilamentBanManager\Resources\BanResource\Pages;

class BanResource extends Resource
{
    public static function getModel(): string
    {
        return config('filament-ban-manager.model', Ban::class);
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-ban-manager.navigation_icon', 'heroicon-o-shield-exclamation');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-ban-manager.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-ban-manager::filament-ban-manager.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-ban-manager::filament-ban-manager.nav.group');
    }

    public static function getNavigationBadge(): ?string
    {
        return config('filament-ban-manager.navigation_badge', false)
                ? (string) static::getModel()::count()
                : '';
    }

    public static function getModelLabel(): string
    {
        return __('filament-ban-manager::filament-ban-manager.resource.label');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bannable_type')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_type'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('bannable_id')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_id')),
                Forms\Components\TextInput::make('ip')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.ip'))
                    ->maxLength(45)
                    ->rules(['ip']),
                Forms\Components\DateTimePicker::make('expired_at')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.expired_at'))
                    ->format(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s'))
                    ->displayFormat(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')),
                Forms\Components\KeyValue::make('metas')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.metas'))
                    ->keyLabel(__('filament-ban-manager::filament-ban-manager.info.key_label'))
                    ->valueLabel(__('filament-ban-manager::filament-ban-manager.info.value_label'))
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('comment')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.comment'))
                    ->columnSpanFull(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('bannable_type')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_type')),
                Infolists\Components\TextEntry::make('bannable_id')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_id')),
                Infolists\Components\TextEntry::make('ip')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.ip')),
                Infolists\Components\TextEntry::make('expired_at')
                    ->dateTime()
                    ->label(__('filament-ban-manager::filament-ban-manager.field.expired_at'))
                    ->formatStateUsing(function ($state) {
                        return $state ? $state->format(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')) : '-';
                    }),
                Infolists\Components\KeyValueEntry::make('metas')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.metas'))
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('comment')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.comment'))
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('created_by_type')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.created_by'))
                    ->formatStateUsing(function ($state, Ban $record) {
                        return $record->createdBy?->name ?? '-';
                    }),
                Infolists\Components\TextEntry::make('created_at')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.created_at'))
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return $state ? $state->format(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')) : '-';
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bannable_type')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_type'))
                    ->searchable()
                    ->toggleable(true)
                    ->default('IP')
                    ->formatStateUsing(function ($state) {
                        return $state ? class_basename($state) : 'IP';
                    }),
                Tables\Columns\TextColumn::make('bannable_id')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_id'))
                    ->toggleable(true),
                Tables\Columns\TextColumn::make('created_by_id')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.created_by'))
                    ->searchable()
                    ->formatStateUsing(function ($record) {
                        return $record->createdBy->name ?? '-';
                    }),
                Tables\Columns\TextColumn::make('ip')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.ip'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('expired_at')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.expired_at'))
                    ->dateTime(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')),
                Tables\Columns\TextColumn::make('comment')
                    ->label(__('filament-ban-manager::filament-ban-manager.field.comment'))
                    ->limit(30)
                    ->wrap()
                    ->toggleable(),
            ])
            ->filters([
                SelectFilter::make('bannable_type')
                    ->label(__('filament-ban-manager::filament-ban-manager.filter.type'))
                    ->options([
                        'ip' => 'IP',
                        'model' => 'Model',
                    ])
                    ->query(function ($query, $filter) {
                        $value = $filter->getState()['value'] ?? null;
                        match ($value) {
                            'ip' => $query->whereNull('bannable_type')->whereNotNull('ip'),
                            'model' => $query->whereNotNull('bannable_type')->whereNotNull('bannable_id'),
                            default => $query,
                        };
                    }),
                Filter::make('bannable_type_search')
                    ->form([
                        TextInput::make('value')
                            ->label(__('filament-ban-manager::filament-ban-manager.filter.bannable_type_fuzzy')),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['value']) {
                            $query->where('bannable_type', 'like', '%' . $data['value'] . '%');
                        }

                        return $query;
                    }),
                Filter::make('bannable_id')
                    ->form([
                        TextInput::make('value')
                            ->label(__('filament-ban-manager::filament-ban-manager.field.bannable_id')),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['value']) {
                            $query->where('bannable_id', $data['value']);
                        }

                        return $query;
                    }),
                Filter::make('meta_key')
                    ->form([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('key')
                                    ->label(__('filament-ban-manager::filament-ban-manager.info.key_label')),
                                TextInput::make('value')
                                    ->label(__('filament-ban-manager::filament-ban-manager.info.value_label')),
                            ]),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['key'] && $data['value']) {
                            $query->whereJsonContains('metas->' . $data['key'], $data['value']);
                        }

                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                UnbanAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    UnbanBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBans::route('/'),
        ];
    }
}
