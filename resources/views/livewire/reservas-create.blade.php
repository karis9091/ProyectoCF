<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card card-primary">
        <div class="card-header mb-3">
            <h3 class="card-title">Crear Reservas</h3>
        </div>

        <form wire:submit.prevent='guardar' class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputFecha" class="col-sm-4 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                        <input wire:model='data.fecha'type="date" class="form-control" id="inputFecha"
                            placeholder="Fecha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKilometros" class="col-sm-4 col-form-label">Kilometros</label>
                    <div class="col-sm-10">
                        <input wire:model='data.kilometros' type="number" class="form-control" id="inputKilometros"
                            placeholder="Kilometros">
                    </div>

                    <div class="form-group row">
                        <label for="inputDestino" class="col-sm-4 col-form-label">Destino</label>
                        <div class="col-sm-10">
                            <input wire:model='data.destino' type="text" class="form-control" id="inputDestino"
                                placeholder="Destino">
                            <br>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="inputVehiculo" class="col-sm-4 col-form-label">Vehiculo</label>
                        <div class="col-sm-12">
                            <select wire:model='data.id_vehiculo' value="" class="form-control" id="inputVehiculo"
                                placeholder="Vehiculo">
                                @foreach ($vehiculos as $vehiculo)
                                    <option value='{{ $vehiculo['id'] }}'>{{ $vehiculo['descripcion'] }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmpleado" class="col-sm-4 col-form-label">Empleado</label>
                        <div class="col-sm-12">
                            <select wire:model='data.id_empleado' value="" class="form-control" id="inputEmpleado"
                                placeholder="Empleado">
                                @foreach ($empleados as $empleado)
                                    <option value='{{ $empleado['id'] }}'>{{ $empleado['nombre'] }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>

                </div>
            </div>
        </form>
    </div>
</div>
