<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentBanManager\Resources;

use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
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
        return __('menu.nav_item.ban');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('menu.nav_group.security');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bannable_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bannable_id'),
                Forms\Components\TextInput::make('ip')
                    ->label('IP')
                    ->maxLength(45),
                Forms\Components\DateTimePicker::make('expired_at')
                    ->label('Expired At')
                    ->format(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s'))
                    ->displayFormat(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')),
                Forms\Components\KeyValue::make('metas')
                    ->label('Metas')
                    ->keyLabel('Key')
                    ->valueLabel('Value')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('comment')
                    ->columnSpanFull(),
                Placeholder::make('created_by')
                    ->label('Created by')
                    ->content(fn ($record): string => $record->createdBy->name ?? '-')
                    ->visibleOn(['view']),
                Placeholder::make('created_at')
                    ->label('Created at')
                    ->content(fn ($record): string => $record->created_at?->format(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')))
                    ->visibleOn(['view']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bannable_type')
                    ->label('Bannable Type')
                    ->searchable()
                    ->toggleable(true)
                    ->default('IP')
                    ->formatStateUsing(function ($state) {
                        return $state ? class_basename($state) : 'IP';
                    }),
                Tables\Columns\TextColumn::make('bannable_id')
                    ->label('Bannable ID')
                    ->toggleable(true),
                Tables\Columns\TextColumn::make('created_by_id')
                    ->label('Created by')
                    ->searchable()
                    ->formatStateUsing(function ($record) {
                        return $record->createdBy->name ?? '-';
                    }),
                Tables\Columns\TextColumn::make('ip')
                    ->label('IP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expired_at')
                    ->dateTime(config('filament-ban-manager.datetime_format', 'Y-m-d H:i:s')),
                Tables\Columns\TextColumn::make('comment'),
            ])
            ->filters([
                SelectFilter::make('bannable_type')
                    ->label('Type')
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
                            ->label('Bannable Type (Fuzzy Search)'),
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
                            ->label('Bannable ID'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['value']) {
                            $query->where('bannable_id', $data['value']);
                        }

                        return $query;
                    }),
            ])
            ->actions([
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
            'view' => Pages\ViewBan::route('/{record}'),
        ];
    }
}
