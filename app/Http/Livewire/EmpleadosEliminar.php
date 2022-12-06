<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmpleadosEliminar extends Component
{


    public $idO;
    public function mount($id){
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->delete('http://127.0.0.1:8001/api/empleados/'.$id)->json();

        return redirect('/empleados');
    }

    public function render()
    {
        return view('livewire.empleados-eliminar');
    }
}
