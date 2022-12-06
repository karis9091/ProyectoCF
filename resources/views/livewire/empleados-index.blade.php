<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <a class="btn btn-app mb-3" href="empleadosCreate">
            <i class="fas fa-plus"></i> agregar
        </a>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabla de empleados</h3>
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
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Salario</th>
                                <th>Fecha</th>
                                <th>Oficina</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                    <td>{{ $empleado['id'] }}</td>
                                    <td>{{ $empleado['nombre'] }}</td>
                                    <td>{{ $empleado['apellidos'] }}</td>
                                    <td>{{ $empleado['salario'] }}</td>
                                    <td>{{ $empleado['fecha'] }}</td>
                                    <td>{{ $empleado['id_oficina'] }}</td>


                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Opciones</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon"
                                                data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/empleadosEdit/{{$empleado['id']}}">Editar</a>
                                                <a class="dropdown-item" href="/empleadosEliminar/{{$empleado['id']}}">Eliminar</a>
                                                <a class="dropdown-item" href="/empleados/{{$empleado['id']}}">Consultar</a>
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
