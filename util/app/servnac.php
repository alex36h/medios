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
        SELECT * FROM  tbl_servnac WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER BY FIELD (servicio, 'Servicio de energía eléctrica domiciliar','Servicios de educación pública','Agua Potable','Servicios de salud pública','Servicios de Seguridad pública','Servicios de alumbrado público','Oportunidades de trabajo','Aguas servidas, alcantarillados')
    ");

    
    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));