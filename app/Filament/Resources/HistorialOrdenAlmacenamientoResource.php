<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistorialOrdenAlmacenamientoResource\Pages;
use App\Filament\Resources\HistorialOrdenAlmacenamientoResource\RelationManagers;
use App\Models\HistorialOrdenAlmacenamiento;
use App\Models\OrdenAlmacenamiento;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistorialOrdenAlmacenamientoResource extends Resource
{
    protected static ?string $model = HistorialOrdenAlmacenamiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?string $navigationGroup = 'Orden Almacenamiento';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()
                    ->schema([
                        Select::make('id_orden_almacenamiento')
                            ->searchable()
                            ->required()
                            ->label('Orden almacenamiento')
                            ->options(OrdenAlmacenamiento::all()->pluck('id'))
                            ->createOptionUsing(function ($data) {
                                return OrdenAlmacenamiento::create($data)->getKey();
                            }),

                        RichEditor::make('descripcion'), 
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_orden_almacenamiento')->label('id orden almacenamiento'),
                TextColumn::make('descripcion')->label('descripcion'),
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
            'index' => Pages\ListHistorialOrdenAlmacenamientos::route('/'),
            'create' => Pages\CreateHistorialOrdenAlmacenamiento::route('/create'),
            'edit' => Pages\EditHistorialOrdenAlmacenamiento::route('/{record}/edit'),
        ];
    }
}
