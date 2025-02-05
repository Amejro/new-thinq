<?php

namespace App\Filament\Resources\ProductIndustryResource\Pages;

use App\Filament\Resources\ProductIndustryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductIndustries extends ListRecords
{
    protected static string $resource = ProductIndustryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
