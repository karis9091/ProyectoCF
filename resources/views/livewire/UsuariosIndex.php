<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class UsuariosIndex extends Component
{
    //
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/usuarios');
        $usuarios = $response->json();
        dd($usuarios);
        return view('liveware.usuarios-index', compact('usuarios'));
    }
}
?>
