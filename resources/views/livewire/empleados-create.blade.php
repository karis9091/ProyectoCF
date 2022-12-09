<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card card-primary">
        <div class="card-header mb-3">
            <h3 class="card-title">Crear Empleado</h3>
        </div>

        <form wire:submit.prevent='guardar' class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputNombre" class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input wire:model='data.nombre'type="text" class="form-control" id="inputNombre"
                            placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputApellido" class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-10">
                        <input wire:model='data.apellidos' type="text" class="form-control" id="inputApellido"
                            placeholder="Apellido">
                    </div>

                    <div class="form-group row">
                        <label for="inputFecha" class="col-sm-4 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <input wire:model='data.fecha' type="date" class="form-control" id="inputFecha"
                                placeholder="Fecha">
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSalario" class="col-sm-4 col-form-label">Salario</label>
                        <div class="col-sm-10">
                            <input wire:model='data.salario' type="text" class="form-control" id="inputSalario"
                                placeholder="Salario">
                            <br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputOficina" class="col-sm-4 col-form-label">Oficina</label>
                        <div class="col-sm-12">
                            <select wire:model='data.id_oficina' value="" class="form-control" id="inputOficina"
                                placeholder="Oficina">
                                @foreach ($oficinas as $oficina)
                                    <option value='{{ $oficina['id'] }}'>{{ $oficina['localidad'] }}</option>
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




