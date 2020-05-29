<h1 class="text-center"><span><?php echo $varAcceso['nombre'] ;?></span></h1>
<hr>



<form role "form" class="form-horizontal " id="formUsuarios">

    <div class="form-group row">
        <label for="usuarios" class="col-md-1 control-label">Usuarios </label>
        <div class="col-md-6">
            <Select id="usuarios" class="custom-select" required></Select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-block btn-info"><strong><i class="fas fa-search"></i> Consultar
                </strong></button>
        </div>




    </div>

    <div class="form-group  ">


    </div>

</form>

<form role "form" class="form-horizontal " id="formGuardarPermisos">
    <div class="form-group row">

        <label for="usuarios" class="col-md-1 control-label">Usuario</label>
        <div class="col-md-6">
            <input type="text" id="usuario" class="form-control" disabled />
        </div>


        <div class="col-md-3 ">
            <button type="submit" id="submitFormGuardarPermisos" class="btn btn-block btn-danger"> <strong><i
                        class="fas fa-save"></i> Guardar</strong></button>



        </div>



    </div>
    <div class="form-group row">

        <label for="nombre" class="col-md-1 control-label">Nombre</label>
        <div class="col-md-6">
            <input type="text" id="nombre" class="form-control" disabled />
        </div>

        <div class="col-md-3">
            <button type="reset" id="limpiarFormGuardarPermisos" class="btn btn-block btn-secondary"> <strong><i
                        class="fas fa-sync-alt"></i> Limpiar</strong></button>
        </div>

    </div>




</form>

<div id="sys_menu" class="col-md-2 offset-md-10">


</div>