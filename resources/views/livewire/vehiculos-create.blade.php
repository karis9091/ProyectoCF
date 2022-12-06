    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div class="card card-primary">
            <div class="card-header mb-3">
                <h3 class="card-title">Registrar Vehiculo</h3>
            </div>

            <form wire:submit.prevent='guardar' class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputDescripcion" class="col-sm-4 col-form-label">Descripcion</label>
                        <div class="col-sm-10">
                            <input wire:model='data.descripcion'type="text" class="form-control" id="inputDireccion"
                                placeholder="Descripcion">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
        </div>
    </div>
</div>
