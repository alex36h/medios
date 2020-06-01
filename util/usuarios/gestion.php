<?php
include("../system/funciones.php");
include("../system/session.php");
include("../system/conexion.php");

$conexion = new Conexion('../logs/');
$conexion->conectar();

# Obtener los parametros del sistema

$resultado_parametros = $conexion->ejecutarConsulta("
    SELECT * FROM parametros
");

$parametro = array();

foreach($resultado_parametros as $fila){
    $parametro[trim($fila['parametro'])] = trim($fila['valor']);
}

#######################################

$session = new Session();

$respuesta = new stdClass();
$respuesta->estado = 1;
$respuesta->mensaje = "";

try{

    if( !$session->checkSession() ) throw new Exception("Debe iniciar una sesión");

    $existe = 0;
    $usuario = '';
    $nombre = '';
    $email = '';
    $tipo_usuario = '';
    $clave_cifrada = hash('sha512', 'm7x'.$parametro['claveusuario']);
    

    if(
        ( isset($_POST['usuario']) && !empty($_POST['usuario']) ) && 
        ( isset($_POST['nombre']) && !empty($_POST['nombre']) ) && 
        ( isset($_POST['tipo_usuario']) && !empty($_POST['tipo_usuario']) ) && 
        ( isset($_POST['email']) && !empty($_POST['email']) )
    ){
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $tipo_usuario = $_POST['tipo_usuario'];
        $email = strtolower(trim($_POST['email']));
    }

    if(
        isset($_POST['existe']) && !empty($_POST['existe'])
    ){
        $existe = $_POST['existe'];
    }

    if( empty($usuario) || empty($nombre) || empty($tipo_usuario) || empty($email) ){
        throw new Exception("Algunos datos llegaron vacios");
    }


}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));