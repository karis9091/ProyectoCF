<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmpleadosCreate extends Component
{

    public $data=[];
    public function render()
    {
        $response = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/oficinas');

        $oficinas = $response['data'];

        return view('livewire.empleados-create', compact('oficinas'));
    }

    public function guardar()
    {
        $datos = Http::withHeaders([
            'Accept'=>'application/json'
        ])->post('http://127.0.0.1:8001/api/empleados',$this->data);

        redirect('/empleados');
    }
}
