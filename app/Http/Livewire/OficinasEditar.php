<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class OficinasEditar extends Component
{
    public $data=[];
    public $idO;
    public function mount($id){
        $this->idO = $id;
        $oficina = Http::withHeaders([
            'Accept'=>'application/json'
        ])->get('http://127.0.0.1:8001/api/oficinas/'.$id)->json();
        $this->data = $oficina;
    }
    public function render()
    {
        return view('livewire.oficinas-editar');
    }

    public function guardar()
    {
        $oficina = Http::withHeaders([
            'Accept'=>'application/json'
        ])->put('http://127.0.0.1:8001/api/oficinas/'.$this->idO, $this->data)->json();
        $this->data = $oficina;
        return redirect('/oficina');


    }
}
