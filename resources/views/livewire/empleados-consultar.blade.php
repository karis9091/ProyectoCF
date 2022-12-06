<div class="card bg-light d-flex flex-fill">
    <div class="card-header text-muted border-bottom-0">
        Consulta de Empleado
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-7">
                <h2 class="lead"><b>Empleado {{$data['id']}}</b></h2>
                <p class="text-muted text-sm"><b>Nombre: </b> {{$data['nombre']}} </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                        <b>Apellidos: </b> {{$data['apellidos']}}</li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-street"></i></span> <b>Fecha:</b>
                        {{$data['fecha']}}</li>
                </ul>
            </div>
            <div class="col-5 text-center">
                <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="text-right">

            <a href="../empleados" class="btn btn-sm btn-primary">
                <i class="fas fa-user" ></i> Regresar
            </a>
        </div>
    </div>
</div>
