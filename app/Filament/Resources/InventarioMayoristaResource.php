<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventarioMayoristaResource\Pages;
use App\Filament\Resources\InventarioMayoristaResource\RelationManagers;
use App\Models\InventarioMayorista;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class InventarioMayoristaResource extends Resource
{
    protected static ?string $model = InventarioMayorista::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Inventario Mayorista';
    protected static ?string $navigationGroup = 'Mayorista';
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
                TextColumn::make('producto.nombre')
                ->searchable()
                ->label('Producto'),
                TextColumn::make('cantidad')
                    ->label('Cantidad'),

            ])
            ->filters([
                //
            ])
            ->actions([
               // Tables\Actions\EditAction::make(),
               //Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
               // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageInventarioMayoristas::route('/'),
        ];
    }
}
