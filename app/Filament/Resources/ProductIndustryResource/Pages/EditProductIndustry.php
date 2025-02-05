<?php

namespace App\Filament\Resources\ProductIndustryResource\Pages;

use App\Filament\Resources\ProductIndustryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductIndustry extends EditRecord
{
    protected static string $resource = ProductIndustryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
