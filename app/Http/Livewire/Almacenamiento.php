<?php

namespace App\Http\Livewire;

use App\Models\MateriaPrima;
use App\Models\OrdenAlmacenamiento;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;

class Almacenamiento extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $materia_prima;
    public $cantidad;

    public $orden;

    protected function getFormSchema(): array
    {
        return [
            Card::make()
                ->schema([
                    Repeater::make('orden')
                        ->schema([
                            Select::make('materia_prima')
                                ->label('Materia Prima')
                                ->options(MateriaPrima::all()->pluck('nombre', 'id'))
                                ->searchable()
                                ->required()
                                ->reactive(),
                            TextInput::make('cantidad')
                                ->label('Cantidad')
                                ->required()
                                ->numeric()
                                ->reactive(),
                        ])
                        ->columns(2)
                ])


            ];
        }

        public function submit()
        {
            $data = $this->form->getState();
            foreach ($data['orden'] as $elemento) {

            OrdenAlmacenamiento::create([
                'id_materia_prima'    => $elemento['materia_prima'] ,
                'id_usuario'          => auth()->user()->id,
                'fecha_recepcion'     => Carbon::now(),
                'cantidad'            => $elemento['cantidad'],
                'evaluada'            => false,
                'aprobada'            => false,
            ]);
        }

        Notification::make()
            ->title('Ingresado Correctamente')
            ->success()
            ->send();

         return Redirect::to('/admin/ordenes');
    }

    public function render()
    {
        return view('livewire.almacenamiento');
    }
}
