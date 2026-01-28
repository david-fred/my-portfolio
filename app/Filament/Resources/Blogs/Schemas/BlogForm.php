<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                TextInput::make('slug')
                    ->required()
                    ->unique(\App\Models\Blog::class, 'slug', ignoreRecord: true),
                Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->nullable()
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->label('Featured image')
                    ->image()
                    ->disk('public')
                    ->directory('blogs'),
                TagsInput::make('tags')
                    ->label('Tags')
                    ->separator(','),
                TextInput::make('views')
                    ->label('Views')
                    ->numeric()
                    ->default(0)
                    ->disabled(),
                TextInput::make('reading_time')
                    ->label('Reading time (minutes)')
                    ->numeric()
                    ->nullable(),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(false),
                DateTimePicker::make('published_at')
                    ->label('Published at'),
            ]);
    }
}
