
<hr>
<form role="form" id="">
    <div class="row">
 
        <div class="col-sm">
            <label for="cuadrante">Distrito</label>
            <select id="cuadrante" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Distrito 1</option>
                <option value="2">Distrito 2</option>
                <option value="3">Distrito 3</option>
                <option value="4">Distrito 4</option>
                <option value="5">Distrito 5</option>
                <option value="6">Distrito 6</option>
                <option value="7">Distrito 7</option>
                <option value="8">Global</option>

            </select>

        </div>
        <div class="col-sm">
            <label for="corrida" class="text-center">Corrida</label>
            <select id="corrida" class="form-control">

                <option value="0" selected="selected">Seleccione</option>
                <option value="1">Corrida #1</option>
                <option value="2">Corrida #2</option>
                <option value="3">Corrida #3</option>
                


            </select>

        </div>

        <div class="col-sm">
            <label for="municipio" style="visibility:hidden">Municipio</label>
            <select id="municipio" class="form-control" style="visibility:hidden">

               
                <option value="20">Managua</option>
      



            </select>

        </div>

    </div>


    <hr>



    <div class="row">

        <div class="col-md-3 mb-3 ">
            <ul class="nav nav-pills flex-column " id="myTab" role="tablist">
                <li class="nav-item border  ">
                    <a class="nav-link active customtabs" id="home-tab" data-toggle="tab" href="#home" role="tab"
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

            <!-- Inicio de los Tabs-->
            <div class="tab-content" id="myTabContent">

                <!-- Caracterizacion-->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



                    <div class="card text">
                        <div class="card-header text-center custom  font-weight-bold">
                            <h5 class="text-white"> <stron>Caracterización del Municipio</strong></h5>
                        </div>
                        <div class="card-body">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button type="button" id="one" class="btn btn-link" data-toggle="collapse" 
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Caracterización
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h5 class="text-center customtitle">Sector</h5>

                                                    <div class="table-responsive ">

                                                        <table id="tablaSector"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sector</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>



                                                </div>

                                                <div class="col-md-12" id="cntTablaRel">
                                                    <h5 class="text-center customtitle"> ¿Es usted el Principal Soporte del Hogar?
                                                    </h5>

                                                    <div class="table-responsive ">

                                                        <table id="tablaSoporteH"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Respuesta</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>



                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-12" id="cntTablaRel">
                                                    <h5 class="text-center customtitle">¿Cuál es su parentesco o relación que tiene,
                                                        con el
                                                        principal soporte del hogar?</h5>

                                                    <div class="table-responsive ">

                                                        <table id="tablaParentescoSop"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Parentesco</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button type="button" id="two" class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Descripción sociodemográfica del entrevistado
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">


                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h5 class="text-center customtitle">Genero</h5>

                                                    <div class="table-responsive ">

                                                        <table id="tablaGenero"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Genero</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h5 class="text-center customtitle">Grupo generacional del entrevistado</h5>

                                                    <div class="table-responsive ">

                                                        <table id="GrupoGen"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Grupo generacional</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h5 class="text-center customtitle">Estado civil del entrevistado</h5>

                                                    <div class="table-responsive ">

                                                        <table id="tablaEstadoCiv"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Estado Civil</th>
                                                                    <th>Porcentaje</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>






                                                <div class="row">

                                                    <div class="col-md-4" id="cntTablaRel">
                                                        <h5 class="text-center customtitle">Actualmente tiene pareja con la que
                                                            convive aquí en su hogar
                                                        </h5>

                                                        <div class="table-responsive ">

                                                            <table id="tablaPareja"
                                                                class="table-striped table-bordered table-hover table-sm"
                                                                width="100%">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Estado</th>
                                                                        <th>Porcentaje</th>

                                                                    </tr>
                                                                </thead>

                                                            </table>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4" id="cntTablaRel">
                                                        <h5 class="text-center customtitle">Nucleo del hogar </h5>

                                                        <div class="table-responsive ">

                                                            <table id="tablaNucleo"
                                                                class="table-striped table-bordered table-hover table-sm"
                                                                width="100%">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Hogar</th>
                                                                        <th>Porcentaje</th>

                                                                    </tr>
                                                                </thead>

                                                            </table>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4" id="cntTablaRel">
                                                        <h5 class="text-center customtitle">Nivel de escolaridad del entrevistado
                                                        </h5>

                                                        <div class="table-responsive ">

                                                            <table id="tablaEscolaridad"
                                                                class="table-striped table-bordered table-hover table-sm"
                                                                width="100%">
                                                                <thead>
                                                                    <tr>

                                                                        <th>Escolaridad</th>
                                                                        <th>Porcentaje</th>

                                                                    </tr>
                                                                </thead>

                                                            </table>

                                                        </div>
                                                    </div>




                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        

                            </div>



                      


            


                        </div>
                    </div>

                </div>

                <!--Fin Caracterizacion -->



                <!-- Denominacion Religiosa -->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">




                    <div class="card text">
                        <div class="card-header text-center custom  font-weight-bold">
                            <h5 class="text-white"> <strong>Denominación Religiosa</strong></h5>
                        </div>
                        <div class="card-body">

                            <div class="row">


                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Afiliación Religiosa</h5>

                                    <div class="table-responsive ">

                                        <table id="tablaAfReligiosa"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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
                                    <h5 class="text-center customtitle">Calidad Religiosa</h5>

                                    <div class="table-responsive ">

                                        <table id="tablaReligion"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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

                            <br>
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Denominacion Religiosa</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaCReligion"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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
                    </div>
                </div>
                <!--Fin Denominacion Religiosa-->


                <!--Licencia ciudadana Municipal-->

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><stron>Licencia ciudadana Municipal</strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Licencia</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaLicencia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Licencia</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                    <div class="table-responsive ">

                                        <table id="tablaLicencia2"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                            </div>

                            <br>

                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle"> Satisfacción con servicios nacionales </h5>

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

                            <br>


                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle"> Satisfacción con servicios municipales </h5>

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

                            <br>


                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle"> Capacidad de Gestión </h5>

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

                            <br>

                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Calificación al trabajo realizado por las autoridades
                                        municipales </h5>

                                    <div class="table-responsive ">

                                        <table id="tablaAlcalde"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Alcalde</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>

                                <div class="col-md-6" id="cntTablaRel">

                                    <h5 class="text-center customtitle">Agrado/ Desagrado autoridades municipales </h5>

                                    <div class="table-responsive ">

                                        <table id="tablaAdAlcalde"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Alcalde</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">


                                    <div class="table-responsive ">

                                        <table id="tablaVicAlcalde"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Vice Alcalde</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>

                                <div class="col-md-6" id="cntTablaRel">



                                    <div class="table-responsive ">

                                        <table id="tablaAdViceAlcalde"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Vice Alcalde</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>

                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">


                                    <div class="table-responsive ">

                                        <table id="tablaSecretaria"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Secretaría</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>

                                <div class="col-md-6" id="cntTablaRel">


                                    <div class="table-responsive ">

                                        <table id="tablaAdSecretaria"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>

                                                    <th>Secretaría</th>
                                                    <th>Porcentaje</th>



                                                </tr>
                                            </thead>

                                        </table>

                                    </div>

                                </div>
                            </div>






                        </div>
                    </div>


                </div>

                <!--Fin Licencia ciudadana Municipal -->



                <!-- Percepción acerca del desarrollo del municipio -->

                <div class="tab-pane fade" id="percepcion" role="tabpanel" aria-labelledby="percepcion-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white">Percepción acerca del desarrollo del municipio</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Desarrollo del municipio </h5>

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

                            <br>

                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle"> Percepción Niveles de Pobreza </h5>

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
                    </div>




                </div>

                <!-- Fin Percepción acerca del desarrollo del municipio -->



                <!--Seguridad Ciudadana -->
                <div class="tab-pane fade" id="seguridad" role="tabpanel" aria-labelledby="seguridad-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><strong>Seguridad Ciudadana</strong></h5>
                        </div>
                        <div class="card-body">


                            <div class="row">

                                <div class="col-md-5" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Indice de victimización</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaIndVictim"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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

                            <br>

                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Que tan Seguro se Siente</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaSegSector"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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

                            <br>

                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Que tan seguro se siente Durante el dia</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaSegDia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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

                            <br>



                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Que tan seguro se siente Durante la noche</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaSegNoche"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
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

                            <br>
                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Calificación al trabajo que realiza la policia nacional</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaTrabPolicia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Calificación </th>
                                                    <th>Porcentaje</th>


                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Profesionalismo en las actuaciones de la policia nacional
                                    </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaProfPolicia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Calificación </th>
                                                    <th>Porcentaje</th>


                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Fin Seguridad Ciudadana -->




                <!-- Medios de Transporte -->

                <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="transporte-tab">



                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><strong>Medios de Transporte Utilizados</strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <div class="table-responsive ">

                                        <table id="tablaTransporte"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Transporte</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>

                <!-- Fin  Medios de Transporte -->



                <!-- Problemas del Sector -->
                <div class="tab-pane fade" id="sector" role="tabpanel" aria-labelledby="sector-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><strong>Problemas del sector de residencia, municipio, país top 10</strong> </h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <h5 class="text-center customtitle">Principales problemas en el Sector de residencia</h5>
                                <div class="col-md-12" id="cntTablaRel">
                                    <div class="table-responsive ">

                                        <table id="tablaProResi"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Problema</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <h5 class="text-center customtitle">Principales problemas en el Municipio</h5>
                                <div class="col-md-12" id="cntTablaRel">
                                    <div class="table-responsive ">

                                        <table id="tablaProMunicipio"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Problema</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <h5 class="text-center customtitle">Principales problemas en el País</h5>
                                <div class="col-md-12" id="cntTablaRel">
                                    <div class="table-responsive ">

                                        <table id="tablaProPais"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Problema</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Fin Problemas del Sector -->





                <!-- Obras  -->

                <div class="tab-pane fade" id="obras" role="tabpanel" aria-labelledby="obras-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><strong>Reconocimiento de obras realizadas en el municipio</strong> </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <h5 class="text-center customtitle">Obras realizadas en el Municipio </h5>
                                <div class="col-md-12" id="cntTablaRel">
                                    <div class="table-responsive ">

                                        <table id="tablaObras" class="table-striped table-bordered table-hover table-sm"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Problema</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>






                </div>

                <!-- Fin Obras  -->



                <!-- Lo que más gusta y menos -->

                <div class="tab-pane fade" id="gustar" role="tabpanel" aria-labelledby="gustar-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white">Lo que más gusta y menos gusta del sector de residencia y del municipio</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">


                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Lo que mas gusta del municipio </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaGmunicipio"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Gusta</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>


                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Lo que menos gusta del municipio</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaNGmunicipio"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Problema</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                            </div>

                            <br>


                            <div class="row">

                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Lo que mas gusta del sector de residencia</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaGResidencia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Gusta</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Lo que menos gusta del sector de residencia</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaNGResidencia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No Gusta</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                </div>


                <!-- Fin Lo que más gusta y menos -->


                <!-- Agenda Ciudadana -->



                <div class="tab-pane fade" id="agenda" role="tabpanel" aria-labelledby="agenda-tab">

                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white">Agenda Ciudadana</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Mejorar condiciones de vida </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaCondVida"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Agenda</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Sugerencia destino de recursos</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaSugDestino"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Agenda</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

                <!-- Fin Agenda Ciudadana -->




                <!-- Temática política -->

                <div class="tab-pane fade" id="tematica" role="tabpanel" aria-labelledby="tematica-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white">Temática política</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Simpatía política </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaSimpatia"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Simpatía</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                                <div class="col-md-6" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Modelo de predisposición</h5>
                                    <div class="table-responsive ">

                                        <table id="" class="table-striped table-bordered table-hover table-sm"
                                            width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Pedisposición</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>

                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Pensando en Futuras Elecciones, Diría que Personas Como
                                        Usted </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaExpectativa"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Oportunidad</th>
                                                    <th>FSLN</th>
                                                    <th>Oposición</th>
                                                    <th>Ninguno</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Intención de Voto</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaIntencion"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Intención</th>
                                                    <th>Porcentaje</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>



                            </div>

                            <div class="row">
                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Pisos y Techos</h5>
                                    <div class="table-responsive ">

                                        <table id="tablaPiso" class="table-striped table-bordered table-hover table-sm"
                                            width="100%">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>P Techo</th>
                                                    <th>PISO Caja negra</th>
                                                    <th>Probabilidad de voto atendiendo a simpatía</th>
                                                    <th>Gobierno: Con quien le iría mejor</th>
                                                    <th>TECHO Según LCM</th>

                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <!-- Temática política -->





                <!-- Frecuencia que ocurren las siguientes situaciones -->

                <div class="tab-pane fade" id="frecuencia" role="tabpanel" aria-labelledby="frecuencia-tab">


                    <div class="card text">
                        <div class="card-header text-center custom font-weight-bold">
                            <h5 class="text-white"><strong>Frecuencia que ocurren las siguientes situaciones</strong></h5>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h5 class="text-center customtitle">Profesionalismo en las actuaciones de la policia nacional
                                    </h5>
                                    <div class="table-responsive ">

                                        <table id="tablaFrecSitua"
                                            class="table-striped table-bordered table-hover table-sm" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Situación</th>
                                                    <th>Frecuente</th>
                                                    <th>Alguna Frecuencia</th>
                                                    <th>Ninguna Frecuencia</th>


                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>




                </div>

                <!--Fin Frecuencia que ocurren las siguientes situaciones -->

            </div>
        </div>
    </div>