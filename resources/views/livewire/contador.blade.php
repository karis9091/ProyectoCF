<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <input wire:model='nombre' class="form-controll" type="text">
    <h1>Hola  {{$nombre}} el numero actual es  {{$numero}}</h1>
    <button wire:click='incrementar' class= "btn-btn-succes"></button>
    <button wire:click='decrementar' class= "btn-btn-danger"></button>
    <button wire:click='cambio' class= "btn-btn-info"></button>
    <button class="btn {{$activo == true ? 'btn-sucess' : 'btn-danger'}}">Cambio
    </button>
</div>
