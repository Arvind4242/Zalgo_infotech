<?php

namespace App\Filament\Resources\PageSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_name')
                    ->label('Page')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('meta_title')
                    ->label('Meta Title')
                    ->limit(60)
                    ->searchable(),

                TextColumn::make('focus_keyword')
                    ->label('Focus Keyword')
                    ->limit(40)
                    ->searchable(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->defaultSort('page_name')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([]);
    }
}
