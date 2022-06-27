<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Resources\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CategoryResource;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;
    
}
