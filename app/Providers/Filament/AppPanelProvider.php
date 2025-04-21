<?php

    namespace Modules\HeadlessBase\Providers\Filament;

    use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;
    use Filament\Http\Middleware\Authenticate;
    use Filament\Http\Middleware\AuthenticateSession;
    use Filament\Http\Middleware\DisableBladeIconComponents;
    use Filament\Http\Middleware\DispatchServingFilamentEvent;
    use Filament\Navigation\NavigationGroup;
    use Filament\Pages;
    use Filament\Panel;
    use Filament\PanelProvider;
    use Filament\Support\Colors\Color;
    use Filament\Widgets;
    use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
    use Illuminate\Cookie\Middleware\EncryptCookies;
    use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
    use Illuminate\Routing\Middleware\SubstituteBindings;
    use Illuminate\Session\Middleware\StartSession;
    use Illuminate\View\Middleware\ShareErrorsFromSession;
    use Modules\HeadlessBase\Enums\NavigationGroupEnums;

    class AppPanelProvider extends PanelProvider
    {
        private static function discoverFor(string $type): string
        {
            return 'Modules\\HeadlessBase\\Filament\\' . $type;
        }

        private static function discoverIn(string $type): string
        {
            return __DIR__ . '/../../Filament/' . $type;
        }

        public function panel(Panel $panel): Panel
        {
            return $panel
                ->default()
                ->id('app')
                ->path('app')
                ->login()
                ->colors([
                    'primary' => Color::Amber,
                ])
                ->discoverResources(in: self::discoverIn('Resources'), for: self::discoverFor('Resources'))
                ->discoverPages(in: self::discoverIn('Pages'), for: self::discoverFor('Pages'))
                ->pages([
                    Pages\Dashboard::class,
                ])
                ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
                ->widgets([
                    Widgets\AccountWidget::class,
                    Widgets\FilamentInfoWidget::class,
                ])
                ->middleware([
                    EncryptCookies::class,
                    AddQueuedCookiesToResponse::class,
                    StartSession::class,
                    AuthenticateSession::class,
                    ShareErrorsFromSession::class,
                    VerifyCsrfToken::class,
                    SubstituteBindings::class,
                    DisableBladeIconComponents::class,
                    DispatchServingFilamentEvent::class,
                ])
                ->navigationGroups([

                    NavigationGroupEnums::Webshop->value            => NavigationGroup::make()
                        ->label('Webshop'),
                    NavigationGroupEnums::System->value             => NavigationGroup::make()
                        ->label('System'),
                    NavigationGroupEnums::CodeTechManagement->value => NavigationGroup::make()
                        ->label('CodeTech Management'),
                ])
                ->authMiddleware([
                    Authenticate::class,
                ])
                ->plugins([
                    FilamentSpatieRolesPermissionsPlugin::make()
                ]);
        }
    }
