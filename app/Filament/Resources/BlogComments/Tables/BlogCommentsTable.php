<?php

namespace App\Filament\Resources\BlogComments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class BlogCommentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('blog.title')
                    ->label('Blog Post')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('comment')
                    ->limit(80)
                    ->tooltip(fn ($record) => $record->comment),

                ToggleColumn::make('is_approved')
                    ->label('Approved')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_approved')
                    ->label('Approved')
                    ->trueLabel('Approved only')
                    ->falseLabel('Pending only'),
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
