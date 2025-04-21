<?php

namespace Modules\HeadlessBase\Filament\Resources\UserResource\Pages;

use Modules\HeadlessBase\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
