<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VehiculosIndex extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/vehiculos')->json();
        $vehiculos = $response['data'];
        return view('livewire.vehiculos-index', compact('vehiculos'));
    }

    public function editarVehiculos(){
        $response = Http::put('http://127.0.0.1:8001/api/vehiculos/{id}');
        $vehiculos = $response->json();
        return view('livewire.vehiculos-index', compact('vehiculos'));
    }

    public function eliminarVehiculos(){
        $response = Http::delete('http://127.0.0.1:8001/api/vehiculos/{id}');
        $vehiculos = $response->json();
        return view('livewire.vehiculos-index', compact('vehiculos'));
    }
}
