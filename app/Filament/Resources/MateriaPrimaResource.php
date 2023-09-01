<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriaPrimaResource\Pages;
use App\Filament\Resources\MateriaPrimaResource\RelationManagers;
use App\Models\MateriaPrima;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class MateriaPrimaResource extends Resource
{
    protected static ?string $model = MateriaPrima::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre'),
                TextColumn::make('precio_unidad'),
                TextColumn::make('lugar_almacenamiento'),
                TextColumn::make('descripcion')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMateriaPrimas::route('/'),
            'create' => Pages\CreateMateriaPrima::route('/create'),
            'edit' => Pages\EditMateriaPrima::route('/{record}/edit'),
        ];
    }    
}
