<?php

namespace App\Filament\Resources\PlanInquiries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PlanInquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Full Name'),

                TextEntry::make('email')
                    ->label('Email Address'),

                TextEntry::make('phone')
                    ->label('Phone Number'),

                TextEntry::make('plan')
                    ->label('Plan Selected')
                    ->badge()
                    ->color(fn (string $state): string => match (true) {
                        str_contains($state, 'Essential')    => 'gray',
                        str_contains($state, 'Growth')       => 'success',
                        str_contains($state, 'WooCommerce')  => 'warning',
                        default => 'primary',
                    }),

                TextEntry::make('website')
                    ->label('Website URL')
                    ->placeholder('—')
                    ->url(fn ($record) => filled($record->website) ? $record->website : null)
                    ->openUrlInNewTab(),

                TextEntry::make('message')
                    ->label('Message')
                    ->placeholder('No message provided')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->label('Submitted At')
                    ->dateTime('M d, Y H:i'),

                TextEntry::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y H:i'),
            ]);
    }
}
