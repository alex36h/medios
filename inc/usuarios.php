<h1 class="text-center"><span><?php echo $varAcceso['nombre'] ;?></span></h1>
<hr>



<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Vizualizar</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Gestión</a>
    </li>

</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="col-md-12">
                    <button class="btn btn-block btn-info" id="consultar"><strong><i class="fas fa-search"></i>
                            Consultar </strong></button>

                    <br>
                </div>

                <div class="row">

                    <div class="col-md-12">
                    <div id="cargando" class="text-center"> 


                    </div>
                    </div>
                    </div>
                    <div class="row">

                    <div class="col-md-12" id="cntTabla">

                        <div class="table-responsive">

                            <table id="tablaUsuarios" class="cell-border stripe table display" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>GESTIÓN</th>
                                        <th>USUARIO</th>
                                        <th>NOMBRE</th>
                                        <th>TIPO USUARIO</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>

                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <div class="row">

            <div class="col-md-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        <li>(*) Campos Obligatorios</li>
                        <li>Al crear un usuario, se establecera (<?php echo $parametro['claveusuario'];?>)</li>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form role= "form"id="formUsuario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="usuario">Usuario (*)</label>
                                <input type="text" class="form-control" id="usuario" maxlength="40">

                            </div>

                            <div class="form-group">
                                <label for="nombre">Nombre (*)</label>
                                <input type="text" class="form-control" id="nombre" maxlength="140">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipo_usuario">Tipo Usuario</label>
                                <select id="tipo_usuario" class="form-control">

                                    <option value="ADMINISTRADOR" selected="selected">ADMINISTRADOR</option>
                                    <option value="GESTOR">GESTOR</option>
                                    <option value="CLIENTE">CLIENTE</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" maxlength="100" id="email" required>

                            </div>
                        </div>

                    </div>

                <div class="row">
                    <div class="col-md-6">
                    <button type="reset" id="limpiarFormUsuario" class="btn btn-block btn-secondary"> <strong><i
                        class="fas fa-sync-alt"></i> Nuevo</strong></button>
                    </div>

                    <div class="col-md-6">
                    <button type="submit" id="submitFormUsuarios" class="btn btn-block btn-danger"> <strong><i
                        class="fas fa-save"></i> Guardar</strong></button>
                    </div>
                </div>

            </form>

            </div>
        </div>

    </div>

</div>
<br>