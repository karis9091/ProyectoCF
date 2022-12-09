<div>
    {{-- The whole world belongs to you. --}}
    <div class="row">
        <a class="btn btn-app mb-3" href="reservasCreate">
            <i class="fas fa-plus"></i> agregar
        </a>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabla de Reservas</h3>
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
                                <th>Id del Vehiculo</th>
                                <th>Fecha</th>
                                <th>Destino</th>
                                <th>Kilometros</th>
                                <th>Id del Empleado</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservas as $reserva)
                                <tr>
                                    <td>{{ $reserva['id']}}</td>
                                    <td>{{ $reserva['id_vehiculo']}}</td>
                                    <td>{{ $reserva['fecha']}}</td>
                                    <td>{{ $reserva['destino']}}</td>
                                    <td>{{ $reserva['kilometros']}}</td>
                                    <td>{{ $reserva['id_empleado']}}</td>


                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Opciones</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon"
                                                data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="/reservasEdit/{{$reserva['id']}}">Editar</a>
                                                <a class="dropdown-item" href="/reservasEliminar/{{$reserva['id']}}">Eliminar</a>
                                                <a class="dropdown-item" href="/reservas/{{$reserva['id']}}">Consultar</a>
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
