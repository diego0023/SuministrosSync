<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MateriaPrimaResource\Pages;
use App\Filament\Resources\MateriaPrimaResource\RelationManagers;
use App\Models\MateriaPrima;
use App\Models\Proveedor;
use App\Models\TipoMateriaPrima;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Filters\SelectFilter;
use PhpParser\Node\Stmt\Label;

class MateriaPrimaResource extends Resource
{
    protected static ?string $model = MateriaPrima::class;

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';
    protected static ?string $navigationLabel = 'Materia Prima';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nombre')
                            ->required()
                            ->label('Nombre'),
                         TextInput::make('precio_unidad')
                            ->required()
                            ->label('Precion por unidad (Q)')
                            ->numeric(),
                        TextInput::make('lugar_almacenamiento')
                            ->required()
                            ->label('Lugar de almacenamiento')
                            ->columnSpan(2),
                         Select::make('id_proveedor')
                            ->searchable()
                            ->required()
                            ->label('Proveedor')
                            ->options(Proveedor::all()->pluck('nombre', 'id'))
                            ->createOptionUsing( function ($data){
                                return Proveedor::create($data)->getKey();
                            })
                            ->createOptionForm([
                                Forms\Components\TextInput::make('nombre')
                                    ->required()
                                    ->label('Nombre'),
                                Forms\Components\TextInput::make('nit')
                                    ->required()
                                    ->label('Nit'),
                                Forms\Components\TextInput::make('telefono')
                                    ->required()
                                    ->tel()
                                    ->label('Telefono'),
                                Forms\Components\TextInput::make('direccion')
                                    ->required()
                                    ->label('direccion'),
                            ]),
                        Select::make('id_tipo')
                            ->searchable()
                            ->required()
                            ->label('Tipo')
                            ->options(TipoMateriaPrima::all()->pluck('nombre', 'id'))
                            ->createOptionForm([
                                Forms\Components\TextInput::make('nombre')
                                    ->required()
                                    ->label('Nombre'),
                            ])
                            ->createOptionUsing( function ($data){
                                return TipoMateriaPrima::create($data)->getKey();
                            }),
                        RichEditor::make('descripcion')
                            ->required()
                            ->label('Descripcion')
                            ->columnSpan(2),
                    ])->columns(2),
                Card::make()
                    ->schema([
                        Repeater::make('caracteristicas')
                            ->schema([
                                TextInput::make('descripcion_materia_prima')
                                    ->label('Descripción'),
                                TextInput::make('valor_max')
                                    ->label('Valor máximo')
                                    ->numeric(),
                                TextInput::make('valor_min')
                                    ->label('Valor minimo')
                                    ->numeric(),
                            ])
                            ->columns(3)
                            ->defaultItems(1),
                 ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')->label('Nombre')->searchable(),
                TextColumn::make('precio_unidad')->label('Precio por unidad (Q)'),
                TextColumn::make('lugar_almacenamiento')->label('Lugar de almacenamineto'),
                TextColumn::make('descripcion')->html()->label('Descripción'),
                TextColumn::make('id_tipo')->label('Tipo')->getStateUsing(function (Model $record): string {
                    return TipoMateriaPrima::find($record->id_tipo)->nombre;
                }),
            ])
            ->filters([
                SelectFilter::make('id_tipo')
                ->options(TipoMateriaPrima::all()->pluck('nombre', 'id'))
                ->label('Buscar por tipo'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([

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
