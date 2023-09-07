<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistorialRequisicionResource\Pages;
use App\Filament\Resources\HistorialRequisicionResource\RelationManagers;
use App\Models\HistorialRequisicion;
use App\Models\Requisicion;
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

class HistorialRequisicionResource extends Resource
{
    protected static ?string $model = HistorialRequisicion::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Requisicion';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make() 
                    ->schema([
                Select::make('id_requisicion')
                            ->searchable()
                            ->required()
                            ->label('Requisicion')
                            ->options(Requisicion::all()->pluck('id'))
                            ->createOptionUsing(function ($data) {
                                return Requisicion::create($data)->getKey(); 
                            }),

                RichEditor::make('descripcion'), 
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_requisicion')->label('id_requisicion'),
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
            'index' => Pages\ListHistorialRequisicions::route('/'),
            'create' => Pages\CreateHistorialRequisicion::route('/create'),
            'edit' => Pages\EditHistorialRequisicion::route('/{record}/edit'),
        ];
    }    
}
