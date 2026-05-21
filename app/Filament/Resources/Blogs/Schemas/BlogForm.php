<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->helperText('Auto-generated from title if left empty on create.'),

                TextInput::make('author_name')
                    ->required()
                    ->default('Admin')
                    ->maxLength(255),

                TextInput::make('category')
                    ->maxLength(255),

                TextInput::make('read_time')
                    ->default('3 min Read')
                    ->maxLength(50),

                TagsInput::make('tags')
                    ->separator(','),

                Textarea::make('excerpt')
                    ->rows(3)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->disk('public')
                    ->directory('blogs')
                    ->image()
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->columnSpanFull(),

                Toggle::make('is_published')
                    ->label('Published')
                    ->default(false),

                DateTimePicker::make('published_at')
                    ->label('Publish Date'),
            ]);
    }
}
