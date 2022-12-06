<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VehiculosCreate extends Component
{
    public $data=[];
    public function render()
    {
        return view('livewire.vehiculos-create');
    }

    public function guardar()
    {
        $datos = Http::withHeaders([
            'Accept'=>'application/json'
        ])->post('http://127.0.0.1:8001/api/vehiculos',$this->data);

        if ($datos->successful()){
            redirect('/vehiculos');
        }else{
            dd('error');
        }
    }
}
?>


