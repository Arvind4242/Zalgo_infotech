<?php

namespace App\Filament\Resources\PlanInquiries\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PlanInquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->sortable(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->searchable(),

                TextColumn::make('plan')
                    ->label('Plan Selected')
                    ->badge()
                    ->color(fn (string $state): string => match (true) {
                        str_contains($state, 'Essential') => 'gray',
                        str_contains($state, 'Growth')    => 'success',
                        str_contains($state, 'WooCommerce') => 'warning',
                        default => 'primary',
                    })
                    ->searchable()
                    ->sortable(),

                TextColumn::make('website')
                    ->label('Website')
                    ->limit(30)
                    ->placeholder('—'),

                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('plan')
                    ->label('Plan')
                    ->options([
                        'Essential Care – $99/month'  => 'Essential Care',
                        'Growth Care – $199/month'    => 'Growth Care',
                        'WooCommerce Care – Custom'   => 'WooCommerce Care',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
