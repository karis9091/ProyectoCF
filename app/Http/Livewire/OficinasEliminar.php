<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class OficinasEliminar extends Component
{

    public $idO;
    public function mount($id){
        $data = Http::withHeaders([
            'Accept'=>'application/json'
        ])->delete('http://127.0.0.1:8001/api/oficinas/'.$id)->json();

        return redirect('/oficina');
    }

    public function render()
    {
        return view('livewire.oficinas-eliminar');


    }
}
