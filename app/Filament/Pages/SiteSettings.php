<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

/**
 * @property-read Schema $form
 */
class SiteSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $title = 'Site Settings';

    protected static ?string $slug = 'site-settings';

    protected static ?int $navigationSort = 0;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public static function getNavigationLabel(): string
    {
        return 'Site Settings';
    }

    public function mount(): void
    {
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $settings = SiteSetting::instance();
        $this->form->fill($settings->attributesToArray());
    }

    public function save(): void
    {
        $data = $this->form->getState();
        SiteSetting::instance()->update($data);

        Notification::make()
            ->success()
            ->title('Site settings saved.')
            ->send();
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->operation('edit')
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Personal & Brand')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('name')->label('Name'),
                        \Filament\Forms\Components\TextInput::make('tagline')->label('Tagline')->columnSpanFull(),
                        \Filament\Forms\Components\Textarea::make('bio')->label('Bio')->columnSpanFull(),
                        \Filament\Forms\Components\FileUpload::make('profile_photo')
                            ->label('Profile photo')
                            ->image()
                            ->disk('public')
                            ->directory('profile'),
                    ])
                    ->columns(2),
                Section::make('Contact')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('contact_email')->label('Email')->email(),
                        \Filament\Forms\Components\TextInput::make('contact_phone')->label('Phone')->tel(),
                        \Filament\Forms\Components\TextInput::make('contact_location')->label('Location'),
                    ])
                    ->columns(3),
                Section::make('Social links')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('social_github')->label('GitHub')->url(),
                        \Filament\Forms\Components\TextInput::make('social_linkedin')->label('LinkedIn')->url(),
                        \Filament\Forms\Components\TextInput::make('social_twitter')->label('Twitter / X')->url(),
                        \Filament\Forms\Components\TextInput::make('social_substack')->label('Substack')->url(),
                    ])
                    ->columns(2),
                Section::make('Availability')
                    ->schema([
                        \Filament\Forms\Components\Toggle::make('available')->label('Show as available'),
                        \Filament\Forms\Components\Textarea::make('availability_text')
                            ->label('Availability message')
                            ->columnSpanFull(),
                    ]),
                Section::make('SEO')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('seo_title')->label('SEO title'),
                        \Filament\Forms\Components\Textarea::make('seo_description')->label('SEO description'),
                        \Filament\Forms\Components\TextInput::make('seo_keywords')->label('SEO keywords'),
                    ])
                    ->columns(1),
                Section::make('Features')
                    ->schema([
                        \Filament\Forms\Components\Toggle::make('feature_blog')->label('Blog enabled'),
                        \Filament\Forms\Components\Toggle::make('feature_contact_form')->label('Contact form enabled'),
                        \Filament\Forms\Components\Toggle::make('feature_analytics')->label('Analytics enabled'),
                    ])
                    ->columns(3),
                Section::make('Resume')
                    ->schema([
                        \Filament\Forms\Components\FileUpload::make('resume_file')
                            ->label('Resume PDF File')
                            ->acceptedFileTypes(['application/pdf'])
                            ->disk('public')
                            ->directory('resume')
                            ->maxSize(5120)
                            ->helperText('Upload your resume/CV PDF file. Visitors can download this from the resume page.')
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Textarea::make('resume_summary')
                            ->label('Professional Summary')
                            ->rows(4)
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Repeater::make('resume_skills')
                            ->label('Skills')
                            ->schema([
                                \Filament\Forms\Components\TextInput::make('category')
                                    ->label('Category (e.g., Frontend, Backend, DevOps)')
                                    ->required(),
                                \Filament\Forms\Components\TagsInput::make('items')
                                    ->label('Skills')
                                    ->separator(',')
                                    ->required(),
                            ])
                            ->defaultItems(1)
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => $state['category'] ?? null)
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Repeater::make('resume_experiences')
                            ->label('Work Experience')
                            ->schema([
                                \Filament\Forms\Components\TextInput::make('title')
                                    ->label('Job Title')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('company')
                                    ->label('Company')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('period')
                                    ->label('Period (e.g., 2022 - Present)')
                                    ->required(),
                                \Filament\Forms\Components\TagsInput::make('achievements')
                                    ->label('Key Achievements')
                                    ->separator(',')
                                    ->required(),
                            ])
                            ->defaultItems(1)
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => ($state['title'] ?? '') . ' at ' . ($state['company'] ?? ''))
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Repeater::make('resume_education')
                            ->label('Education')
                            ->schema([
                                \Filament\Forms\Components\TextInput::make('degree')
                                    ->label('Degree')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('institution')
                                    ->label('Institution')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('period')
                                    ->label('Period (e.g., 2016 - 2020)')
                                    ->required(),
                            ])
                            ->defaultItems(1)
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => ($state['degree'] ?? '') . ' - ' . ($state['institution'] ?? ''))
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Repeater::make('resume_certifications')
                            ->label('Certifications')
                            ->schema([
                                \Filament\Forms\Components\TextInput::make('name')
                                    ->label('Certification Name')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('issuer')
                                    ->label('Issuer')
                                    ->required(),
                                \Filament\Forms\Components\TextInput::make('year')
                                    ->label('Year')
                                    ->numeric()
                                    ->required(),
                            ])
                            ->defaultItems(1)
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => ($state['name'] ?? '') . ' - ' . ($state['issuer'] ?? ''))
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    /**
     * @return array<Action|\Filament\Actions\ActionGroup>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->submit('save')
                ->keyBindings(['mod+s']),
        ];
    }

    public function getFormContentComponent(): Component
    {
        return Form::make([EmbeddedSchema::make('form')])
            ->id('form')
            ->livewireSubmitHandler('save')
            ->footer([
                Actions::make($this->getFormActions())
                    ->alignment(Alignment::Start)
                    ->fullWidth(false)
                    ->sticky(false)
                    ->key('form-actions'),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getFormContentComponent(),
            ]);
    }

    public function getTitle(): string|Htmlable
    {
        return 'Site Settings';
    }
}
