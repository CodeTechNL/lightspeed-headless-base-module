<?php

    namespace Modules\HeadlessBase\Filament\Resources\ProductResource\Pages;

    use Filament\Resources\Pages\CreateRecord;
    use Modules\HeadlessBase\Filament\Resources\ProductResource;

    class CreateProduct extends CreateRecord
    {
        protected static string $resource = ProductResource::class;
    }
