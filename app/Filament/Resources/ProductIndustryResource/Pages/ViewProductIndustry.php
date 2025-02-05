<?php

namespace App\Filament\Resources\ProductIndustryResource\Pages;

use App\Filament\Resources\ProductIndustryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProductIndustry extends ViewRecord
{
    protected static string $resource = ProductIndustryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
