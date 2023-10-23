<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoMinoristaResource\Pages;
use App\Filament\Resources\PedidoMinoristaResource\RelationManagers;
use App\Models\PedidoMinorista;
use App\Models\Producto;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\ToggleColumn;

class PedidoMinoristaResource extends Resource
{
    protected static ?string $model = PedidoMinorista::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'Pedidos';
    protected static ?string $navigationGroup = 'Mayorista';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Placeholder::make('id_producto'),
                Placeholder::make('cantidad'),
                Placeholder::make('total'),
                Placeholder::make('tienda'),
                Placeholder::make('fecha'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_producto')
                ->label('Producto')
                ->getStateUsing(function (Model $record) {
                    $producto =  Producto::find($record->id_producto);
                    return $producto->nombre;
                }),
                TextColumn::make('cantidad'),
                TextColumn::make('total'),
                TextColumn::make('tienda'),
                ToggleColumn::make('procesado')
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make()
                //     ->label('Evaluar')
                //     ->icon('heroicon-o-eye'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePedidoMinoristas::route('/'),
        ];
    }
}
