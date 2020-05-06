<h1> <?php echo $varAcceso['nombre'] ;?></h1>

<div class="row">
<div class="col-md-12">

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>(!) Primero Seleccione el Usuario y Luego Guarde el Permiso a los Accesos</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<form role "form" class="form-horizontal " id="formUsuarios">
<div class="form-group row">
    <label for="usuarios" class="col-md-1 control-label">Usuarios </label>
    <div class="col-md-11">
        <Select id= "usuarios" class="form-control" required></Select>
    </div>
</div>

<div class="form-group  ">

    <div class="col-md-4 offset-md-4">
       <button type="submit" class="btn btn-block btn-info">Consultar</button>
    </div>
</div>

</form>
<hr>
<form role "form" class="form-horizontal " id="formGuardar">
<div class="form-group row">
    <label for="usuarios" class="col-md-1 control-label">Usuario</label>
    <div class="col-md-11">
        <input type="text" id= "usuario" class="form-control" disabled/>
    </div>
</div>
<div class="form-group row">
    <label for="nombre" class="col-md-1 control-label">Nombre</label>
    <div class="col-md-11">
        <input type="text" id= "nombre" class="form-control" disabled/>
    </div>
</div>

<div class="form-group  ">

    <div class="col-md-4 offset-md-4">
       <button type="submit" id="submitFormGuardarPermisos" class="btn btn-block btn-danger">Guardar</button>
    </div>
</div>
</form>

<div id= "sys_menu" class="col-md-9 offset-md-3">

    


</div>




</div>
</div>