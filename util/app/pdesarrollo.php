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
        SELECT * FROM  tbl_percdesarrollo WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER BY FIELD (percepcion,'Que vivieron la generación de sus padres con respecto a la que vivieron la generación de sus abuelos, era…','Que vive actualmente con respecto a la que vivieron la generación de sus padres, es','Que vivirán la generación de sus hijos con respecto a la que vive actualmente, será')
    ");

    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));