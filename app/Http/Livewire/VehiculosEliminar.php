<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VehiculosEliminar extends Component
{
    public $idV;
    public function mount($id){
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->delete('http://127.0.0.1:8001/api/vehiculos/'.$id)->json();

        return redirect('/vehiculos');
    }
    public function render()
    {
        return view('livewire.vehiculos-eliminar');
    }
}
