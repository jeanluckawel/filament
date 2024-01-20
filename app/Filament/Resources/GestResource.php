<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GestResource\Pages;
use App\Filament\Resources\GestResource\RelationManagers;
use App\Models\Gest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GestResource extends Resource
{
    protected static ?string $model = Gest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Name')),

                Forms\Components\TextInput::make('slug')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Slug')),

                Forms\Components\TextInput::make('quantity')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Quantity')),

                Forms\Components\TextInput::make('price')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Price')),

                Forms\Components\FileUpload::make('image')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Image')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('quantity')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('image')
                    ->searchable()
                    ->sortable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGests::route('/'),
            'create' => Pages\CreateGest::route('/create'),
            'edit' => Pages\EditGest::route('/{record}/edit'),
        ];
    }
}
