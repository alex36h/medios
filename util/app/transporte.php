<?php
include("../system/funciones.php");
include("../system/session.php");
include("../system/conexion.php");

$conexion = new Conexion('../logs/');
$conexion->conectar();

$session = new Session();

$respuesta = new stdClass();
$respuesta->estado = 1;
$respuesta->mensaje = "";
$respuesta->data = array();

try{

    if( !$session->checkSession() ) throw new Exception("Debe iniciar una sesión");

    $cuadrante = $_GET["cuadrante"];
    $municipio = $_GET["municipio"];
    $corrida = $_GET["corrida"];


    $resultado = $conexion->ejecutarConsulta("
        SELECT * FROM  tbl_transp WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER BY FIELD (transporte,'Autobús urbano - Ruta','Autobús interurbano','Taxi','Transporte de empresa','Caponera/ Mototaxi','Vehículo particular','Motocicleta','Bicicleta','Carreta o carretón halado por caballo','Caballo','Otros medios:','Generalmente no utilizo ningún medio de transporte')
    ");

    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));