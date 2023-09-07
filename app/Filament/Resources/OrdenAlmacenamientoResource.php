<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdenAlmacenamientoResource\Pages;
use App\Filament\Resources\OrdenAlmacenamientoResource\RelationManagers;
use App\Models\OrdenAlmacenamiento;
use App\Models\TipoMateriaPrima;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
class OrdenAlmacenamientoResource extends Resource
{
    protected static ?string $model = OrdenAlmacenamiento::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Orden Almacenamiento';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([

                        Select::make('id_materia_prima')
                            ->searchable()
                            ->required()
                            ->label('Materia Prima') 
                            ->options(TipoMateriaPrima::all()->pluck('nombre', 'id'))
                            ->createOptionForm([
                                Forms\Components\TextInput::make('nombre')
                                    ->required()
                                    ->label('Nombre'),
                            ])
                            ->createOptionUsing(function ($data) {
                                return TipoMateriaPrima::create($data)->getKey();
                            }), 
                        Select::make('id_usuario')
                            ->searchable()
                            ->required()
                            ->label('Usuario')
                            ->options(User::all()->pluck('nombre', 'id'))
                            ->createOptionForm([
                                Forms\Components\TextInput::make('nombre')
                                    ->required()
                                    ->label('Nombre'),
                            ])
                            ->createOptionUsing(function ($data) {
                                return User::create($data)->getKey();
                            }),
                            DatePicker::make('fecha_recepcion')
                            ->label('Fecha Entrega'),
                        TextInput::make('cantidad')
                            ->required()
                            ->label('Cantidad')
                            ->numeric(),
                        Toggle::make('evaluada')
                        ->onColor('success'),
                        Toggle::make('aprobada')
                        ->onColor('success') ,

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_materia_prima')->label('id_materia_prima'),
                TextColumn::make('id_usuario')->label('id_usuario'),
                TextColumn::make('fecha_recepcion')->label('fecha_entrega'),
                TextColumn::make('cantidad')->label('cantidad'),
                ToggleColumn::make('evaluada')->label('evaluada')->onColor('success'),
                ToggleColumn::make('aprobada')->label('aprobada')->onColor('success'),
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
            'index' => Pages\ListOrdenAlmacenamientos::route('/'),
            'create' => Pages\CreateOrdenAlmacenamiento::route('/create'),
            'edit' => Pages\EditOrdenAlmacenamiento::route('/{record}/edit'),
        ];
    }    
}
