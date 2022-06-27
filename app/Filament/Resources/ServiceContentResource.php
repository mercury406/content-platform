<?php

namespace App\Filament\Resources;

use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\ServiceContent;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\ServiceContentResource\Pages;

class ServiceContentResource extends Resource
{
    protected static ?string $model = ServiceContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make("category_id")
                                ->relationship("category", "title")
                                ->required(),
                Textarea::make("text")->required(),
                DatePicker::make("published_date")->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id"),
                TextColumn::make("published_date"),
                TextColumn::make("category.title"),
                TextColumn::make("text"),
            ])
            ->filters([
                //
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceContents::route('/'),
            'create' => Pages\CreateServiceContent::route('/create'),
            'edit' => Pages\EditServiceContent::route('/{record}/edit'),
        ];
    }
}
