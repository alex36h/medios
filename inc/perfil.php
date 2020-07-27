<h1 class="text-center"><span><?php echo $varAcceso['nombre'] ;?></span></h1>
<hr>


<form role "form" class="form-horizontal " id="formPerfil">
 


<div class="form-group row">

        <label for="usuarios" class="col-md-1 control-label">Usuario</label>
        <div class="col-md-11">
            <input type="text" id="usuario" class="form-control" disabled />
        </div>


    


    </div>
    <div class="form-group row">

        <label for="nombre" class="col-md-1 control-label">Nombre</label>
        <div class="col-md-11">
            <input type="text" id="nombre" class="form-control"  />
        </div>



    </div>


    <div class="form-group row">

<label for="nombre" class="col-md-1 control-label">Correo</label>
<div class="col-md-11">
    <input type="email" id="email" class="form-control"  />
</div>



</div>

    <div class="form-group row">

<label for="nombre" class="col-md-1 control-label">Contraseña</label>
<div class="col-md-11">
    <input type="text" id="clave" class="form-control"  />
</div>



</div>

<div class="row">
<div class="col-md-6 ">
            <button type="submit" id="submitformPerfil" class="btn btn-block btn-danger"> <strong><i
                        class="fas fa-save"></i> Guardar</strong></button>



        </div>

        <div class="col-md-6">
            <button type="reset" id="limpiarFormGuardarPermisos" class="btn btn-block btn-secondary"> <strong><i
                        class="fas fa-sync-alt"></i> Limpiar</strong></button>
        </div>
        </div>


</form>

<br>