<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdenFabricacionResource\Pages;
use App\Filament\Resources\OrdenFabricacionResource\RelationManagers;
use App\Models\OrdenFabricacion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Card;
use App\Models\Detalle;
use App\Models\Producto;

class OrdenFabricacionResource extends Resource
{
    protected static ?string $model = OrdenFabricacion::class;
    protected static ?string $modelLabel = 'Ordenes';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Fabrica';

    public $test ="";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                Placeholder::make("fecha")
                    ->label("Fecha")
                    ->content(function ($get) {  return $get('fecha');
                    }),
                Placeholder::make("descripcion")
                    ->label("Descripción")
                    ->content(function ($get) {  return $get('descripcion');
                    }),
                Placeholder::make('test')
                    ->label('Productos')
                    ->content(function ($get) {
                        $aux = Detalle::where('id_orden_fabricacions', $get('id'))->get()->pluck('id_producto')->toArray();
                        $nombreProductos = [];

                        foreach ($aux as $idProducto) {
                            $prod = Producto::where('id', $idProducto)->first(); // Busca el detalle relacionado con el id_producto
                            array_push($nombreProductos, $prod->nombre);
                        }
                        $nombreProductosString = implode(', ', $nombreProductos);

                        return $nombreProductosString;
                    })
                    ])->columns(1)
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('descripcion'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListOrdenFabricacions::route('/'),
            'edit' => Pages\EditOrdenFabricacion::route('/{record}/edit'),
            'view' => Pages\ViewOrden::route('/{record}'),
        ];
    }
}