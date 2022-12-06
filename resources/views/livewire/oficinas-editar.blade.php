<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card card-primary">
        <div class="card-header mb-3">
            <h3 class="card-title">Editar Oficina</h3>
        </div>

        <form wire:submit.prevent='guardar' class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputDireccion" class="col-sm-4 col-form-label">Direccion</label>
                    <div class="col-sm-10">
                        <input wire:model='data.direccion'type="text" class="form-control" id="inputDireccion"
                            placeholder="Direccion">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputProvincia" class="col-sm-4 col-form-label">Provincia</label>
                    <div class="col-sm-10">
                        <input wire:model='data.provincia' type="text" class="form-control" id="inputProvincia"
                            placeholder="Provincia">
                    </div>

                    <div class="form-group row">
                        <label for="inputLocalidad" class="col-sm-4 col-form-label">Localidad</label>
                        <div class="col-sm-10">
                            <input wire:model='data.localidad' type="text" class="form-control" id="inputLocalidad"
                                placeholder="Localidad">
                            <br>
                            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                        </div>
                    </div>


                </div>
            </div>
    </div>
</div>


</form>
</div>
</div>
