<?php

namespace App\Filament\Resources\GalleryImages\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title (optional)')
                    ->nullable(),
                FileUpload::make('image_path')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('gallery')
                    ->required(),
                DatePicker::make('event_date')
                    ->label('Event date'),
                TextInput::make('event_name')
                    ->label('Event name')
                    ->nullable(),
                Textarea::make('description')
                    ->label('Description')
                    ->nullable()
                    ->columnSpanFull(),
                TextInput::make('order')
                    ->label('Sort order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
