<?php

namespace App\Filament\Resources\PageSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PageSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('page_name')
                    ->label('Page Name')
                    ->disabled()
                    ->columnSpanFull(),

                TextInput::make('page_key')
                    ->label('Page Key (Route Name)')
                    ->disabled()
                    ->helperText('This is the internal route identifier — do not change.')
                    ->columnSpanFull(),

                TextInput::make('meta_title')
                    ->label('Meta Title')
                    ->required()
                    ->maxLength(70)
                    ->helperText('Recommended: 50–70 characters. This appears in browser tabs and Google results.')
                    ->columnSpanFull(),

                Textarea::make('meta_description')
                    ->label('Meta Description')
                    ->rows(3)
                    ->maxLength(160)
                    ->helperText('Recommended: 120–160 characters. This appears under the page title in Google results.')
                    ->columnSpanFull(),

                TextInput::make('focus_keyword')
                    ->label('Focus Keyword')
                    ->maxLength(100)
                    ->helperText('The single primary keyword this page should rank for (e.g. "web development company india").')
                    ->columnSpanFull(),

                Textarea::make('keywords')
                    ->label('Meta Keywords')
                    ->rows(2)
                    ->helperText('Comma-separated keywords (e.g. "web development, laravel, react, nodejs"). Not a major ranking factor but useful for reference.')
                    ->columnSpanFull(),
            ]);
    }
}
