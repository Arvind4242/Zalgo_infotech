<?php

namespace App\Filament\Resources\JobApplications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class JobApplicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('job_type')
                    ->label('Position')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->searchable(),

                TextColumn::make('experience')
                    ->label('Experience / Degree'),

                TextColumn::make('skills')
                    ->label('Skills')
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state)
                    ->limit(60),

                TextColumn::make('resume')
                    ->label('Resume')
                    ->formatStateUsing(fn ($state) => $state ? 'Download' : '—')
                    ->url(fn ($record) => $record->resume
                        ? asset('storage/' . $record->resume)
                        : null
                    )
                    ->openUrlInNewTab(),

                TextColumn::make('created_at')
                    ->label('Applied')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('job_type')
                    ->label('Position')
                    ->options(fn () => \App\Models\JobApplication::query()
                        ->select('job_type')
                        ->distinct()
                        ->pluck('job_type', 'job_type')
                        ->toArray()
                    ),
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
