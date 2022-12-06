<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VehiculosConsultar extends Component
{
    public $idV;
    public function mount($id){
        $this->idV=$id;
    }
    public function render()
    {
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/vehiculos/'.$this->idV)->json();
        return view('livewire.vehiculos-consultar', compact('data'));
    }
}
