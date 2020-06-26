<?php
include("../../system/funciones.php");
include("../../system/session.php");
include("../../system/conexion.php");

$conexion = new Conexion('../../logs/');
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
    
        ( isset($_POST['municipio']) && !empty($_POST['municipio']) ) && 
        ( isset($_POST['corrida']) && !empty($_POST['corrida']) ) 
    ){
     
        $municipio = $_POST['municipio'];
        $corrida = $_POST['corrida'];
        
    }

    
       $resultado = $conexion->ejecutarConsulta("
        SELECT * FROM tbl_grupogeneracion 
        WHERE id_municipio='".$municipio."'
        AND id_corrida ='".$corrida."'
 
    ");

    foreach($resultado as $fila){
        
        $respuesta->data [] = $fila;
  
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));
