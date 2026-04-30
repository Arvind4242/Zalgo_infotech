<?php

namespace App\Filament\Resources\BlogComments;

use App\Filament\Resources\BlogComments\Pages\ListBlogComments;
use App\Filament\Resources\BlogComments\Tables\BlogCommentsTable;
use App\Models\BlogComment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BlogCommentResource extends Resource
{
    protected static ?string $model = BlogComment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $navigationLabel = 'Blog Comments';

    protected static \UnitEnum|string|null $navigationGroup = 'Blog';

    public static function table(Table $table): Table
    {
        return BlogCommentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogComments::route('/'),
        ];
    }
}
