<?php

    namespace Modules\HeadlessBase\Filament\Resources;

    use CodeTechNL\WebshopSetup\Models\Product;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;
    use Modules\HeadlessBase\Enums\NavigationGroupEnums;
    use Modules\HeadlessBase\Filament\Resources;

    class ProductResource extends Resource
    {
        protected static ?string $model = Product::class;

        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

        public static function getNavigationGroup(): ?string
        {
            return NavigationGroupEnums::Webshop->value;
        }


        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    //
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    //
                ])
                ->filters([
                    //
                ])
                ->actions([
                    Tables\Actions\EditAction::make(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                    ]),
                ]);
        }

        public static function getPages(): array
        {
            return [
                'index'  => ProductResource\Pages\ListProducts::route('/'),
                'create' => ProductResource\Pages\CreateProduct::route('/create'),
                'edit'   => ProductResource\Pages\EditProduct::route('/{record}/edit'),
            ];
        }
    }
