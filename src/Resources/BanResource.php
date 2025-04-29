<?php

declare(strict_types=1);

namespace Rectitudeopen\FilamentBanManager\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Rectitudeopen\FilamentBanManager\Models\Ban;
use Rectitudeopen\FilamentBanManager\Resources\BanResource\Actions\UnbanAction;
use Rectitudeopen\FilamentBanManager\Resources\BanResource\Actions\UnbanBulkAction;
use Rectitudeopen\FilamentBanManager\Resources\BanResource\Pages;

class BanResource extends Resource
{
    public static function getModel(): string
    {
        return config('filament-ban-manager.model', Ban::class);
    }

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';

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
                Forms\Components\TextInput::make('created_by_type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('created_by_id'),
                Forms\Components\TextInput::make('ip')
                    ->maxLength(45),
                Forms\Components\DateTimePicker::make('expired_at'),
                Forms\Components\KeyValue::make('metas')
                    ->label('Metas')
                    ->keyLabel('Key')
                    ->valueLabel('Value')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('comment')
                    ->columnSpanFull(),
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
                    ->dateTime(),
                Tables\Columns\TextColumn::make('comment'),
            ])
            ->filters([
                //
            ])
            ->actions([
                UnbanAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    UnbanBulkAction::make(),
                ]),
            ]);
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
