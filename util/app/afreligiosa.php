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

    

    $cuadrante = $_POST['cuadrante'];
    $municipio= $_POST['municipio'];    
    $corrida= $_POST['corrida'];

    if(empty($municipio)){

        throw new Exception("Debe Seleccionar un Municipio");
    }
     


    if(empty($cuadrante)){

        throw new Exception("Debe Seleccionar un Cuadrante");
    }
     
  
    if(empty($corrida)){

        throw new Exception("Debe Seleccionar una Corrida");
    }
     
    
    else{    $resultado = $conexion->ejecutarConsulta("
        SELECT * FROM tbl_areligion WHERE id_cuadrante='".$cuadrante."'
        AND id_municipio ='".$municipio."'
        AND id_corrida ='".$corrida."'
        ORDER by religion ASC
    ");
    }

    

    foreach($resultado as $fila){
        
   
    

        $respuesta->data [] = $fila;
      

 
    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));