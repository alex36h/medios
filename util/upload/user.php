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

    

    if(isset($_POST["Import"])){

        $filename=$_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"] > 0)
        {
            $file = fopen($filename, "r");
            $bug = 0;
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
            {
                $bug++ ;
                if($getData[0] !=''){
                    $sql = "INSERT into tbl_tpolicia (calificacion,porcenteaje,id_cuadrante,id_municipio,id_corrida
                    ) 
                            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                    $result = $conexion->ejecutarConsulta($sql);
                }
            }
            if($bug > 0){
                echo "<h1>CSV file upload successfully .....!</h1>";
            }

            fclose($file);
        }
    }

    
    



}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));