<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventarioBodegaResource\Pages;
use App\Filament\Resources\InventarioBodegaResource\RelationManagers;
use App\Models\InventarioBodega;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class InventarioBodegaResource extends Resource
{
    protected static ?string $model = InventarioBodega::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Inventario Bodega';

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
                TextColumn::make('materiaprima.nombre')
                    ->searchable()
                    ->label('Materia Prima'),
                TextColumn::make('cantidad')
                    ->label('Cantidad'),
                TextColumn::make('valor')
                    ->label('Valor (Q)')
                    ->getStateUsing(function (Model $record): float {
                    return $record->cantidad * ($record->materiaprima->precio_unidad);
                }),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageInventarioBodegas::route('/'),
        ];
    }
}
