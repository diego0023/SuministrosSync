<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PedidoMinorista;

class VistaExterna extends Component
{
    public $id_producto;
    public $cantidad;
    public $tienda;
    public $fecha;


    public function mount()
    {
        return view('livewire.vista-externa');
    }

    public function savePedido(){
        try{
            PedidoMinorista::create([
                    'id_producto'=> $this->id_producto,
                    'cantidad'=> $this->cantidad,
                    'total'=> 0,
                    'tienda'=> $this->tienda,
                    'fecha'=> $this->fecha,
                    'procesado'=> false

            ]);

        } catch(Exception $e){
            error_log($e->getMessage());
        }

        error_log($this->id_producto);
        error_log($this->cantidad);
        error_log($this->tienda);
        error_log($this->fecha);
    }


}