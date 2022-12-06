<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class OficinasCreate extends Component
{
    public $data=[
    ];

    public function render()
    {
        return view('livewire.oficinas-create');
    }

    public function guardar()
    {
        $response = Http::withHeaders([
            'Accept'=>'application/json'
        ])->post('http://127.0.0.1:8001/api/oficinas',$this->data);

        if ($response->successful()){
            redirect('/oficina');
        }else{
            dd('error');
        }
    }
}
