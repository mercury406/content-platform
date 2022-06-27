<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;


use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Resources\RelationManagers\HasManyRelationManager;

class ContentsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'contents';

    protected static ?string $recordTitleAttribute = 'text';

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
                TextColumn::make("text"),
            ])
            ->filters([
                //
            ]);
    }
}
