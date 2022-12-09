<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ReservasIndex extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/reservas')->json();
        $reservas = $response;
        return view('livewire.reservas-index', compact('reservas'));
    }
}
