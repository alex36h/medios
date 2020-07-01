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
        SELECT * FROM  tbl_obras WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER BY FIELD (obra, 'Construcción/ adoquinamiento/ mejoras de calles','Construcción/ rehabilitación de parques','Limpieza de calles/ cauces','Construcción/ remodelación Centros de Salud','Proyecto de viviendas','Instalación/ mantenimiento alumbrado publico','Proyecto alcantarillado/ aguas servidas','No sabe/ no tiene conocimiento','Ninguna','Otros','Construcción/ mantenimiento Centros deportivos','Contrucción/ reparación/ mantenimiento de Colegio','Proyecto de agua potable')
    ");

    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));