<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmpleadosEditar extends Component
{
    public $data=[];
    public $idE;
    public function mount($id){
        $this->idE = $id;
        $response = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/empleados/'. $id)->json();
        $this->data = $response;
        $idOficina = $this->data['oficinas']['id'];
        $this->data['id_oficina'] = (int) $idOficina;
    }

    public function render()
    {
        $response = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/oficinas')->json();
        $oficinas = $response['data'];

        return view('livewire.empleados-editar', compact('oficinas'));
    }

    public function guardar()
    {
        $idOficina = $this->data['id_oficina'];
        $this->data['id_oficina'] = (int) $idOficina;
        unset($this->data['oficinas']);
        $datos = Http::withHeaders([
            'Accept'=>'application/json'
        ])->put('http://127.0.0.1:8001/api/empleados/'.$this->idE,$this->data);

        redirect('/empleados');


    }
}
