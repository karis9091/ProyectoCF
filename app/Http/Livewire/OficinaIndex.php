<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class OficinaIndex extends Component
{

    public function render(){
        $response = Http::get('http://127.0.0.1:8001/api/oficinas')->json();
        $oficinas = $response['data'];
        return view('livewire.oficina-index', compact('oficinas'));
    }

    public function editarOficinas(){
        $response = Http::put('http://127.0.0.1:8001/api/oficinas/{id}');
        $oficinas = $response->json();
        return view('livewire.oficina-index', compact('oficinas'));
    }

    public function eliminarOficinas(){
        $response = Http::delete('http://127.0.0.1:8001/api/oficinas/{id}');
        $oficinas = $response->json();
        return view('livewire.oficina-index', compact('oficinas'));
    }

   









}
