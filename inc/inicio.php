<h1 class="text-center"><span><?php echo $varAcceso['nombre'] ;?></span></h1>
<hr>
<form role="form" id="formConsulta">
    <div class="row">
        <div class="col-sm">
            <label for="municipio">Municipio</label>
            <select id="municipio" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Masaya</option>
                <option value="2">Rivas</option>

            </select>

        </div>
        <div class="col-sm">
            <label for="cuadrante">Cuadrante</label>
            <select id="cuadrante" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Cuadrante 1</option>
                <option value="2">Cuadrante 2</option>
                <option value="3">Cuadrante 3</option>
                <option value="4">Cuadrante 4</option>
                <option value="5">Global</option>

            </select>

        </div>
        <div class="col-sm">
            <label for="corrida" class="text-center">Corrida</label>
            <select id="corrida" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Enero - Febrero 2020</option>
                <option value="2">Marzo - Abril 2020</option>

            </select>

        </div>
        <div class="col-sm">

            <label for="tipo_usuario" class="text-center"><br></label>
            <button type="submit" class="btn btn-block btn-success" id="consultar"><strong><i class="fas fa-search"></i>
                    Consultar
                </strong></button>
        </div>
    </div>


    <br>
  

    <h1>Bootstrap 4 Vertical Nav Tabs</h1>
  <hr>
  <div class="row">
    <div class="col-md-3 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Caracterización</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Denominación Religiosa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-md-9">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
 <h1>Caracterización</h1>




  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

 <h1>Denominación</h1>
 <div class="row">


<div class="col-md-6" id="cntTablaRel">
    <h6 class="text-center">Afiliación Religiosa</h6>

    <div class="table-responsive ">

        <table id="tablaAfReligiosa" class="cell-border stripe table display table-sm" width="100%">
            <thead>
                <tr>

                    <th>Afiliación</th>
                    <th>Porcentaje</th>

                </tr>
            </thead>

        </table>

    </div>



</div>


<div class="col-md-6" id="cntTablaRel">
    <h6 class="text-center">Calidad Religiosa</h6>

    <div class="table-responsive ">

        <table id="tablaReligion" class="cell-border stripe table display table-sm" width="100%">
            <thead>
                <tr>

                    <th>Calidad Religiosa</th>
                    <th>Porcentaje</th>

                </tr>
            </thead>

        </table>

    </div>



</div>

</div>

<div class="row">

<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center">Denominacion Religiosa</h6>
    <div class="table-responsive ">

        <table id="tablaCReligion" class="cell-border stripe table display table-sm" width="100%">
            <thead>
                <tr>

                    <th>Categoría</th>
                    <th>Católica</th>
                    <th>Evangelica</th>
                    <th>Otros Mormon, testigos de jehova,etc</th>
                </tr>
            </thead>

        </table>

    </div>
</div>
</div>



  </div>


  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

  <div class="row">

<div class="col-md-3" id="cntTablaRel">
    <h6 class="text-center">Licencia ciudadana Municipal</h6>
    <div class="table-responsive ">

        <table id="tablaLicencia" class="cell-border stripe table display table-sm" width="100%">
            <thead>
                <tr>

                    <th>Licencia</th>
                    <th>Porcentaje</th>

                </tr>
            </thead>

        </table>

    </div>
</div>
</div>

<hr>


<div class="row">

<div class="col-md-8" id="cntTablaRel">
    <h6 class="text-center"> Satisfacción con servicios nacionales </h6>

    <div class="table-responsive ">

        <table id="tablaSatisfaccionServ" class="table-striped table-bordered table-hover table-sm"
            width="100%">
            <thead>
                <tr>

                    <th>Servicio</th>
                    <th>Satisfecho</th>
                    <th>Ni satisfecho ni insatisfecho</th>
                    <th>Insatisfecho</th>


                </tr>
            </thead>

        </table>

    </div>



</div>

</div>


  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>