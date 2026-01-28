<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                TextInput::make('slug')
                    ->required()
                    ->unique(\App\Models\Project::class, 'slug', ignoreRecord: true),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('category')
                    ->label('Category')
                    ->nullable(),
                Textarea::make('long_description')
                    ->label('Long description')
                    ->nullable()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('projects'),
                TagsInput::make('technologies')
                    ->label('Technologies')
                    ->separator(','),
                TextInput::make('github_url')
                    ->label('GitHub URL')
                    ->url()
                    ->nullable(),
                TextInput::make('live_url')
                    ->label('Live URL')
                    ->url()
                    ->nullable(),
                Toggle::make('featured')
                    ->label('Featured')
                    ->default(false),
                DatePicker::make('completed_at')
                    ->label('Completed at'),
                TextInput::make('order')
                    ->label('Sort order')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true),
            ]);
    }
}
