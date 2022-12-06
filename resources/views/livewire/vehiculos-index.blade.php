<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <a class="btn btn-app mb-3" href="vehiculosCreate">
            <i class="fas fa-plus"></i> agregar
        </a>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabla de Vehiculos</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{ $vehiculo['id'] }}</td>
                                    <td>{{ $vehiculo['descripcion'] }}</td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Opciones</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon"
                                                data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/vehiculoEdit/{{$vehiculo['id']}}">Editar</a>
                                                <a class="dropdown-item" href="/vehiculoEliminar/{{$vehiculo['id']}}">Eliminar</a>
                                                <a class="dropdown-item" href="/vehiculo/{{$vehiculo['id']}}">Consultar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>

            </div>

        </div>
</div>
