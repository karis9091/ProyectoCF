<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class OficinasConsultar extends Component
{
    public $idA;
    public function mount($id){
        $this->idA =$id;
    }

    public function render()
    {
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/oficinas/'.$this->idA)->json();
        return view('livewire.oficinas-consultar', compact('data'));

    }





}
