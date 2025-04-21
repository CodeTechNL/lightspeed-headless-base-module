<?php

    namespace Modules\HeadlessBase\Filament\Pages;

    use Filament\Forms\Components\Section;
    use Filament\Forms\Components\Toggle;
    use Filament\Forms\Form;
    use Filament\Pages\SettingsPage;
    use Modules\HeadlessBase\Enums\NavigationGroupEnums;

    class ManageStore extends SettingsPage
    {
        protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

        protected static string $settings = \Modules\HeadlessBase\Settings\ManageStore::class;

        public static function getNavigationLabel(): string
        {
            return __('Modules');
        }

        public static function getNavigationGroup(): ?string
        {
            return NavigationGroupEnums::CodeTechManagement->value;
        }

        public function form(Form $form): Form
        {
            return $form
                ->columns()
                ->schema([
                    Section::make('Resource managers')
                        ->columns(3)
                        ->schema([
                            Toggle::make('product_management'),
                            Toggle::make('brand_management'),
                            Toggle::make('category_management'),
                            Toggle::make('supplier_management'),
                        ])
                ]);
        }

        public static function canAccess(): bool
        {
            return auth()->user()->hasRole('Super Admin');
        }
    }
