<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ReservasCreate extends Component
{
    public $data=[];
    public function render()
    {
        $response = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/vehiculos')->json();

        $vehiculos = $response['data'];


        $empleadosResponse = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/empleados')->json();

        $empleados = $empleadosResponse;

        return view('livewire.reservas-create', compact(['vehiculos','empleados']));
    }
    public function guardar()
    {
        $datos = Http::withHeaders([
            'Accept'=>'application/json'
        ])->post('http://127.0.0.1:8001/api/reservas',$this->data);

        redirect('/reservas');
    }
}
