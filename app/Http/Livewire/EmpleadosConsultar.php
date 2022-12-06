<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmpleadosConsultar extends Component
{
    public $idE;
    public $data =[];
    public function mount($id){
        $this->idE =$id;
    }

    public function render()
    {
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/empleados/'.$this->idE)->json();

        $this->data = $data;
        return view('livewire.empleados-consultar', compact('data'));
    }



}
