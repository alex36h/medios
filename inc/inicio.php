<h3 class="text-center"><span><?php echo $varAcceso['nombre'] ;?></span></h3>
<hr>
<form role="form" id="formConsulta">
    <div class="row">
        <div class="col-sm">
            <label for="municipio">Municipio</label>
            <select id="municipio" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Masaya</option>
                <option value="2">Rivas</option>
                <option value="3">Jalapa</option>

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


    <hr>

    <div class="row">

        <div class="col-md-3 mb-3">
            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                <li class="nav-item border ">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Caracterización</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Denominación Religiosa</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Licencia Ciudadana Municipal</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="percepcion-tab" data-toggle="tab" href="#percepcion" role="tab"
                        aria-controls="contact" aria-selected="false">Percepción del Municipio</a>
                </li>


                <li class="nav-item border">
                    <a class="nav-link" id="seguridad-tab" data-toggle="tab" href="#seguridad" role="tab"
                        aria-controls="contact" aria-selected="false">Seguridad Ciudadana</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="frecuencia-tab" data-toggle="tab" href="#frecuencia" role="tab"
                        aria-controls="contact" aria-selected="false">Frecuencia de Situaciones</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="transporte-tab" data-toggle="tab" href="#transporte" role="tab"
                        aria-controls="contact" aria-selected="false">Medios de Transporte</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="sector-tab" data-toggle="tab" href="#sector" role="tab"
                        aria-controls="contact" aria-selected="false">Problemas del Sector</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="obras-tab" data-toggle="tab" href="#obras" role="tab"
                        aria-controls="contact" aria-selected="false">Reconocimiento de Obras</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="gustar-tab" data-toggle="tab" href="#gustar" role="tab"
                        aria-controls="contact" aria-selected="false">Lo que mas Gusta</a>
                </li>

                <li class="nav-item border">
                    <a class="nav-link" id="agenda-tab" data-toggle="tab" href="#agenda" role="tab"
                        aria-controls="contact" aria-selected="false">Agenda Ciudadana</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" id="tematica-tab" data-toggle="tab" href="#tematica" role="tab"
                        aria-controls="contact" aria-selected="false">Temática política</a>
                </li>


            </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-9">
            <div id="cargando" class="text-center">


            </div>
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

                                <table id="tablaAfReligiosa" class="table-striped table-bordered table-hover table-sm"
                                    width="100%">
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

                                <table id="tablaReligion" class="table-striped table-bordered table-hover table-sm"
                                    width="100%">
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

                                <table id="tablaCReligion" class="table-striped table-bordered table-hover table-sm"
                                    width="100%">
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

                        <div class="col-md-6" id="cntTablaRel">
                            <h6 class="text-center">Licencia ciudadana Municipal 1</h6>
                            <div class="table-responsive ">

                                <table id="tablaLicencia" class="table-striped table-bordered table-hover table-sm"
                                    width="100%">
                                    <thead>
                                        <tr>

                                            <th>Licencia</th>
                                            <th>Porcentaje</th>

                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                        <div class="col-md-6" id="cntTablaRel">
                            <h6 class="text-center">Licencia ciudadana Municipal 2</h6>
                            <div class="table-responsive ">

                                <table id="tablaLicencia2" class="table-striped table-bordered table-hover table-sm"
                                    width="100%">
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

<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center"> Satisfacción con servicios nacionales </h6>

    <div class="table-responsive ">

        <table id="tablaSatisfaccionServ"
            class="table-striped table-bordered table-hover table-sm" width="100%">
            <thead>
                <tr>

                    <th>Servicio</th>
                    <th>Satisfecho</th>
                    <th>Ni satisfecho ni insatisfecho</th>
                    <th>Insatisfecho</th>
                    <th>Ns/Nr</th>


                </tr>
            </thead>

        </table>

    </div>

</div>

</div>


<hr>

<div class="row">

<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center"> Satisfacción con servicios municipales </h6>

    <div class="table-responsive ">

        <table id="tablaServMun"
            class="table-striped table-bordered table-hover table-sm" width="100%">
            <thead>
                <tr>

                    <th>Servicio</th>
                    <th>Satisfecho</th>
                    <th>Ni satisfecho ni insatisfecho</th>
                    <th>Insatisfecho</th>
                    <th>Ns/Nr</th>


                </tr>
            </thead>

        </table>

    </div>

</div>

</div>

<hr>
<div class="row">

<div class="col-md-7" id="cntTablaRel">
    <h6 class="text-center"> Capacidad de Gestión </h6>

    <div class="table-responsive ">

        <table id="tablaCapGestion"
            class="table-striped table-bordered table-hover table-sm" width="100%">
            <thead>
                <tr>

                    <th>Gestión</th>
                    <th>Porcentaje</th>
             


                </tr>
            </thead>

        </table>

    </div>

</div>

</div>



</div>


                <div class="tab-pane fade" id="percepcion" role="tabpanel" aria-labelledby="percepcion-tab">

                <div class="row">

<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center"> Percepción acerca del desarrollo del municipio  </h6>

    <div class="table-responsive ">

        <table id="tablaPercDesa"
            class="table-striped table-bordered table-hover table-sm" width="100%">
            <thead>
                <tr>

                    <th>Mejor</th>
                    <th>Igual</th>
                    <th>Peor</th>
                    <th>Ns/Nr</th>


                </tr>
            </thead>

        </table>

    </div>

</div>

</div>

<hr>

<div class="row">

<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center"> Percepción Niveles de Pobreza  </h6>

    <div class="table-responsive ">

        <table id="tablaPercPobr"
            class="table-striped table-bordered table-hover table-sm" width="100%">
            <thead>
                <tr>

                    <th>Mejor</th>
                    <th>Igual</th>
                    <th>Peor</th>
                    <th>Ns/Nr</th>


                </tr>
            </thead>

        </table>

    </div>

</div>

</div>

                </div>



                <div class="tab-pane fade" id="seguridad" role="tabpanel" aria-labelledby="seguridad-tab">

                    <h1>Seguridad Ciudadana</h1>

                    <div class="row">

<div class="col-md-5" id="cntTablaRel">
    <h6 class="text-center">Indice de victimización</h6>
    <div class="table-responsive ">

        <table id="tablaIndVictim" class="table-striped table-bordered table-hover table-sm"
            width="100%">
            <thead>
                <tr>

                    <th>Ha sido victima</th>
                    <th>No ha sido victima</th>

                </tr>
            </thead>

        </table>

    </div>
</div>



</div>
<hr>
<div class="row">
<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center">Que tan Seguro se Siente</h6>
    <div class="table-responsive ">

        <table id="tablaSegSector" class="table-striped table-bordered table-hover table-sm"
            width="100%">
            <thead>
                <tr>
                    <th> </th>
                    <th> Muy seguro/seguro</th>
                    <th>Muy inseguro/inseguro</th>
                    <th>Ns/nr</th>
                    <th>No ha sido victima</th>

                </tr>
            </thead>

        </table>

    </div>
</div>

</div>

<hr>
<div class="row">
<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center">Que tan seguro se siente Durante el dia</h6>
    <div class="table-responsive ">

        <table id="tablaSegDia" class="table-striped table-bordered table-hover table-sm"
            width="100%">
            <thead>
                <tr>
                    <th> </th>
                    <th>Muy seguro/seguro</th>
                    <th>Muy inseguro/inseguro</th>
                    <th>Ns/nr</th>
                    <th>No ha sido victima</th>

                </tr>
            </thead>

        </table>

    </div>
</div>
</div>

<hr>
<div class="row">
<div class="col-md-12" id="cntTablaRel">
    <h6 class="text-center">Que tan seguro se siente Durante la noche</h6>
    <div class="table-responsive ">

        <table id="tablaSegNoche" class="table-striped table-bordered table-hover table-sm"
            width="100%">
            <thead>
                <tr>
                    <th> </th>
                    <th>Muy seguro/seguro</th>
                    <th>Muy inseguro/inseguro</th>
                    <th>Ns/nr</th>
                    <th>No ha sido victima</th>

                </tr>
            </thead>

        </table>

    </div>
</div>
</div>


                </div>


                <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="transporte-tab">

                    <h1>Medios de Transporte </h1>




                </div>

                <div class="tab-pane fade" id="sector" role="tabpanel" aria-labelledby="sector-tab">

                    <h1>Problemas del Sector </h1>




                </div>
                <div class="tab-pane fade" id="obras" role="tabpanel" aria-labelledby="obras-tab">

                    <h1>Reconocimiento de Obras</h1>




                </div>

                <div class="tab-pane fade" id="gustar" role="tabpanel" aria-labelledby="gustar-tab">

                    <h1>Lo que más gusta y menos gusta del sector de residencia y del municipio.</h1>




                </div>

                <div class="tab-pane fade" id="agenda" role="tabpanel" aria-labelledby="agenda-tab">

                    <h1>Agenda Ciudadana</h1>




                </div>

                <div class="tab-pane fade" id="tematica" role="tabpanel" aria-labelledby="tematica-tab">

                    <h1>Temática política</h1>




                </div>

                <div class="tab-pane fade" id="frecuencia" role="tabpanel" aria-labelledby="frecuencia-tab">

                    <h1>Frecuencia que ocurren las siguientes situaciones </h1>




                </div>

            </div>
        </div>
    </div>