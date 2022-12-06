<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmpleadosIndex extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/empleados')->json();
        $empleados = $response;
        return view('livewire.empleados-index', compact('empleados'));
    }

}
