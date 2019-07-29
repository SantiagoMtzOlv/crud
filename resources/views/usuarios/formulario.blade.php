{{ $Modo=='crear' ? 'Agregar Usuario':'Modificar Usuario' }}
<div class="contanier">
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" name="nombre" id="nombre" value="{{isset($usuario->nombre)?$usuario->nombre:''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">A. paterno</span>
                </div>
                <input type="text" name="ape_paterno" id="ape_paterno" value="{{isset($usuario->ape_paterno)?$usuario->ape_paterno:''}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">A. Materno</span>
                </div>
                <input type="text" name="ape_materno" id="ape_materno" value="{{isset($usuario->ape_materno)?$usuario->ape_materno:''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Edad</span>
                </div>
                <input type="text" name="edad" id="edad" value="{{isset($usuario->edad)?$usuario->edad:''}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Calle</span>
                </div>
                <input type="text" name="calle" id="calle" value="{{isset($usuario->calle)?$usuario->calle:''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Colonia</span>
                </div>
                <input type="text" name="colonia" id="colonia" value="{{isset($usuario->colonia)?$usuario->colonia:''}}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Delegación</span>
                </div>
                <input type="text" name="delegacion" id="delegacion" value="{{isset($usuario->delegacion)?$usuario->delegacion:''}}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text bg-success text-light" id="basic-addon1">Número</span>
                </div>
                <input type="text" name="numero" id="numero" value="{{isset($usuario->numero)?$usuario->numero:''}}">
            </div>
        </div>
    </div>

</div>
    