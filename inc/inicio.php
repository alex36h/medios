<h3 class="text-center">Aplicación Licencia Ciudadana</h3>
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
                <option value="4">Chinandega</option>
                <option value="5">Matagalpa</option>
                <option value="6">Granada</option>



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

        <div class="col-md-3 mb-3 ">
            <ul class="nav nav-pills flex-column " id="myTab" role="tablist">
                <li class="nav-item border  ">
                    <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab"
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
                        <div class="card-header text-center">
                            <h5>Caracterización del Municipio</h5>
                        </div>
                        <div class="card-body">


                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Caracterización
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Sector</h6>

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

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center"> ¿Es usted el Principal Soporte del Hogar?
                                                    </h6>

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
                                                    <h6 class="text-center">¿Cuál es su parentesco o relación que tiene,
                                                        con el
                                                        principal soporte del hogar?</h6>

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
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Descripción sociodemográfica del entrevistado
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <div class="row">


                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Genero</h6>

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
                                                    <h6 class="text-center">Grupo generacional del entrevistado</h6>

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
                                                    <h6 class="text-center">Estado civil del entrevistado</h6>

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
                                                        <h6 class="text-center">Actualmente tiene pareja con la que
                                                            convive aquí en su hogar
                                                        </h6>

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
                                                        <h6 class="text-center">Nucleo del hogar </h6>

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
                                                        <h6 class="text-center">Nivel de escolaridad del entrevistado
                                                        </h6>

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

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Descripción socioeconómica del entrevistado
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-4" id="cntTablaRel">
                                                    <h6 class="text-center">Genera Ingresos </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaIngresos"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Genera ingresos</th>
                                                                    <th>No genera ingresos</th>

                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-8" id="cntTablaRel">
                                                    <h6 class="text-center">Ingresos Provienen</h6>

                                                    <div class="table-responsive ">

                                                        <table id="IngresoProv"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Trabajo</th>
                                                                    <th>Pensión por jubilación </th>
                                                                    <th>Remesas</th>
                                                                    <th>Pensión alimenticia</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-5" id="cntTablaRel">
                                                    <h6 class="text-center">Razones por las que no genera </h6>

                                                    <div class="table-responsive ">

                                                        <table id="TablaNogenraIng"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Razón</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-3" id="cntTablaRel">
                                                    <h6 class="text-center">Este trabajo lo realizá en </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaTrabajoRealiza"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Lugar</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>


                                                <div class="col-md-4" id="cntTablaRel">
                                                    <h6 class="text-center">Composicion según lugar de trabajo
                                                    </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaTrabajocomposicion"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Tipo</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>


                                            </div>




                                            <br>

                                            <div class="row">

                                                <div class="col-md-5" id="cntTablaRel">
                                                    <h6 class="text-center">Tipo de Ingreso </h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaTipoIngreso"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Tipo</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-3" id="cntTablaRel">
                                                    <h6 class="text-center">Trabaja Para </h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaTrabajoSector"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sector Público</th>
                                                                    <th>Sector Privado</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-4" id="cntTablaRel">
                                                    <h6 class="text-center">Afiliación seguro social</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaAfiliadoSeguro"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sector Público</th>
                                                                    <th>Sector Privado</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">
                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Descripción socioeconomica del entrevistado
                                                    </h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaDescripcionEntrevistado"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Descripción</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">NSE Medio tipicohacia alto</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaNseAlto"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>NSE Medio tipicohacia alto</th>
                                                                    <th>AB</th>
                                                                    <th>C1</th>
                                                                    <th>C2</th>



                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>
                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">NSE Medio medio </h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaNseMedio"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>NSE Medio medio </th>
                                                                    <th>D1</th>
                                                                    <th>D2</th>




                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">NSE Medio bajo</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaNseBajo"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>NSE Medio bajo</th>
                                                                    <th>D1</th>
                                                                    <th>D2</th>




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
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                Descripción del principal soporte del hogar
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel"
                                        aria-labelledby="headingFour">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Genero</h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaGeneroPsh"
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

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Grupo generacional del entrevistado</h6>

                                                    <div class="table-responsive ">

                                                        <table id="GrupoGenPsh"
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
                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Estado civil del Psh</h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaEstadoCivPsh"
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

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Actualmente tiene pareja con la que convive
                                                        aquí en su hogar
                                                    </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaParejaPsh"
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
                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-12" id="cntTablaRel">
                                                    <h6 class="text-center">Nivel de escolaridad del Psh </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaEscolaridadPsh"
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

                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFive">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Descripción económica del principal soporte económico del hogar
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" role="tabpanel"
                                        aria-labelledby="headingFive">
                                        <div class="card-body">



                                            <div class="row">

                                                <div class="col-md-12" id="cntTablaRel">
                                                    <h6 class="text-center">Ingresos Provienen Psh</h6>

                                                    <div class="table-responsive ">

                                                        <table id="IngresoProvPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Trabajo</th>
                                                                    <th>Pensión por jubilación </th>
                                                                    <th>Remesas</th>
                                                                    <th>Pensión alimenticia</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>
                                            </div>

                                            <br>


                                            <div class="row">

                                                <div class="col-md-6" id="cntTablaRel">
                                                    <h6 class="text-center">Composicion según lugar de trabajo Psh
                                                    </h6>

                                                    <div class="table-responsive ">

                                                        <table id="tablaTrabajocomposicionPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Tipo</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>


                                                <div class="col-md-4" id="cntTablaRel">
                                                    <h6 class="text-center">Afiliación seguro social Psh</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaAfiliadoSeguroPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sector Público</th>
                                                                    <th>Sector Privado</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="row">

                                                <div class="col-md-5" id="cntTablaRel">
                                                    <h6 class="text-center">Tipo de Ingreso Psh</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaTipoIngresoPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Tipo</th>
                                                                    <th>Porcentaje</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>


                                                <div class="col-md-3" id="cntTablaRel">
                                                    <h6 class="text-center">Trabaja Para (Psh)</h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaTrabajoSectorPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Sector Público</th>
                                                                    <th>Sector Privado</th>


                                                                </tr>
                                                            </thead>

                                                        </table>

                                                    </div>
                                                </div>

                                                <div class="col-md-4" id="cntTablaRel">
                                                    <h6 class="text-center">Descripción socioeconomica del entrevistado
                                                    </h6>


                                                    <div class="table-responsive ">

                                                        <table id="tablaDescripcionPsh"
                                                            class="table-striped table-bordered table-hover table-sm"
                                                            width="100%">
                                                            <thead>
                                                                <tr>

                                                                    <th>Descripción</th>
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

                <!--Fin Caracterizacion -->



                <!-- Denominacion Religiosa -->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">




                    <div class="card text">
                        <div class="card-header text-center">
                            <h5>Denominación Religiosa</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">


                                <div class="col-md-6" id="cntTablaRel">
                                    <h6 class="text-center">Afiliación Religiosa</h6>

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
                                    <h6 class="text-center">Calidad Religiosa</h6>

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
                                    <h6 class="text-center">Denominacion Religiosa</h6>
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
                        <div class="card-header text-center">
                            <h5>Licencia ciudadana Municipal</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h6 class="text-center">Licencia</h6>
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

                            <br>


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

                            <br>


                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
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

                            <br>

                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h6 class="text-center">Calificación al trabajo realizado por las autoridades
                                        municipales </h6>

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

                                    <h6 class="text-center">Agrado/ Desagrado autoridades municipales </h6>

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
                        <div class="card-header text-center">
                            <h5>Percepción acerca del desarrollo del municipio</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h6 class="text-center">Desarrollo del municipio </h6>

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
                                    <h6 class="text-center"> Percepción Niveles de Pobreza </h6>

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
                        <div class="card-header text-center">
                            <h5>Seguridad Ciudadana</h5>
                        </div>
                        <div class="card-body">


                            <div class="row">

                                <div class="col-md-5" id="cntTablaRel">
                                    <h6 class="text-center">Indice de victimización</h6>
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
                                    <h6 class="text-center">Que tan Seguro se Siente</h6>
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
                                    <h6 class="text-center">Que tan seguro se siente Durante el dia</h6>
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
                                    <h6 class="text-center">Que tan seguro se siente Durante la noche</h6>
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
                                    <h6 class="text-center">Calificación al trabajo que realiza la policia nacional</h6>
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
                                    <h6 class="text-center">Profesionalismo en las actuaciones de la policia nacional
                                    </h6>
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
                        <div class="card-header text-center">
                            <h5>Medios de Transporte Utilizados</h5>
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
                        <div class="card-header text-center">
                            <h5>Problemas del sector de residencia, municipio, país top 10 </h5>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <h6>Principales problemas en el Sector de residencia</h6>
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
                                <h6>Principales problemas en el Municipio</h6>
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
                                <h6>Principales problemas en el País</h6>
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
                        <div class="card-header text-center">
                            <h5>Reconocimiento de obras realizadas en el municipio </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <h6>Obras realizadas en el Municipio </h6>
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
                        <div class="card-header text-center">
                            <h5>Lo que más gusta y menos gusta del sector de residencia y del municipio</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">


                                <div class="col-md-6" id="cntTablaRel">
                                    <h6>Lo que mas gusta del municipio </h6>
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
                                    <h6>Lo que menos gusta del municipio</h6>
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
                                    <h6>Lo que mas gusta del sector de residencia</h6>
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
                                    <h6>Lo que menos gusta del sector de residencia</h6>
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
                        <div class="card-header text-center">
                            <h5>Agenda Ciudadana</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h6 class="text-center">Mejorar condiciones de vida </h6>
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
                                    <h6 class="text-center">Sugerencia destino de recursos</h6>
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
                        <div class="card-header text-center">
                            <h5>Temática política</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" id="cntTablaRel">
                                    <h6 class="text-center">Simpatía política </h6>
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
                                    <h6 class="text-center">Modelo de predisposición</h6>
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
                                    <h6 class="text-center">Pensando en Futuras Elecciones, Diría que Personas Como
                                        Usted </h6>
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
                                    <h6 class="text-center">Intención de Voto</h6>
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
                                    <h6 class="text-center">Pisos y Techos</h6>
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
                        <div class="card-header text-center">
                            <h5>Frecuencia que ocurren las siguientes situaciones</h5>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12" id="cntTablaRel">
                                    <h6 class="text-center">Profesionalismo en las actuaciones de la policia nacional
                                    </h6>
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