<?php

namespace Modules\HeadlessBase\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\HeadlessBase\Filament\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
