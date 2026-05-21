<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput as NumberInput;

class JobOpeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(100)
                    ->helperText('Used as tab ID (e.g. web-dev). No spaces, lowercase.'),

                TextInput::make('icon')
                    ->default('💼')
                    ->maxLength(10)
                    ->helperText('Emoji icon shown in the tab (e.g. 🌐, 📱, 🤖)'),

                TextInput::make('badge')
                    ->default('Open Role')
                    ->maxLength(50),

                TextInput::make('subtitle')
                    ->maxLength(255)
                    ->columnSpanFull(),

                TagsInput::make('skills')
                    ->separator(',')
                    ->helperText('Type a skill and press Enter or comma to add.')
                    ->columnSpanFull(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->helperText('Lower number = shown first'),

                Toggle::make('is_active')
                    ->label('Active (show on career page)')
                    ->default(true),
            ]);
    }
}
