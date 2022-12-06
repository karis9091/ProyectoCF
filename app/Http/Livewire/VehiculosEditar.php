<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VehiculosEditar extends Component
{
    public $data=[];
    public $idV;
    public function mount($id){
        $this->idV = $id;
        $vehiculo = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/vehiculos/'.$id)->json();
        $this->data = $vehiculo;
    }

    public function render()
    {
        return view('livewire.vehiculos-editar');
    }

    public function guardar()
    {
        $vehiculo = Http::withHeaders([
            'Accept'=>'application/json'
        ])->put('http://127.0.0.1:8001/api/vehiculos/'.$this->idV, $this->data)->json();
        $this->data = $vehiculo;
        return redirect('/vehiculos');


    }
}
