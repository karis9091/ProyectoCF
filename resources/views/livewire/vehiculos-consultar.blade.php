<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card bg-light d-flex flex-fill">
        <div class="card-header text-muted border-bottom-0">
            Consulta de Vehiculos
        </div>
        <div class="card-body pt-0">
            <div class="row">
                <div class="col-7">
                    <h2 class="lead"><b>Vehiculo {{$data['id']}}</b></h2>
                    <p class="text-muted text-sm"><b>Descripcion: </b> {{$data['descripcion']}} </p>
                </div>
                <div class="col-5 text-center">
                    <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">

                <a href="../vehiculos" class="btn btn-sm btn-primary">
                    <i class="fas fa-user" ></i> Regresar
                </a>
            </div>
        </div>
    </div>

</div>
