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

    $cuadrante='';
    $municipio='';
    $corrida='';
    if(
        ( isset($_POST['cuadrante']) && !empty($_POST['cuadrante']) ) && 
        ( isset($_POST['municipio']) && !empty($_POST['municipio']) ) && 
        ( isset($_POST['corrida']) && !empty($_POST['corrida']) ) 
    ){
        $cuadrante = $_POST['cuadrante'];
        $municipio = $_POST['municipio'];
        $corrida = $_POST['corrida'];
        
    }
    $resultado = $conexion->ejecutarConsulta("
        SELECT * FROM  tbl_sermun WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER BY FIELD (servicio, 'Transporte Colectivo','Centros deportivos', 'Parques y centros de recreación familiar', 'Otros servicios de transporte? (Caponeras, ciclo taxis, etc.)','Transporte selectivo, taxis','Atención a la población en situaciones de desastres naturales','Acceso a terrenos en cementerios','Construcción y mantenimiento de aceras y andenes','Recolección de desechos sólidos?','Limpieza de calles','Mantenimiento y limpieza de cementerios','Mantenimiento de las calles','Ornato de su sector de residencia','Ornato de la ciudad','Orden e higiene en los mercados','Estados de caminos rurales')
    ");

    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));