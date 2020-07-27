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

    $existe=1;
    $usuario = '';
    $nombre = '';
    $email = '';
    $clave = '';
    /*$clave_cifrada = hash('sha512', 'm7x'.$parametro['claveusuario']);*/


    

    if(
        ( isset($_POST['usuario']) && !empty($_POST['usuario']) ) && 
        ( isset($_POST['nombre']) && !empty($_POST['nombre']) ) && 
        ( isset($_POST['email']) && !empty($_POST['email']) ) && 
        ( isset($_POST['clave']) && !empty($_POST['clave']) )
    ){
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $clave = strtolower(trim($_POST['clave']));
    }


    if( empty($usuario) || empty($nombre) || empty($email) || empty($clave) ){
        throw new Exception("Algunos datos llegaron vacios");
    }

    $resultado = $conexion->ejecutarConsulta("
        SELECT COUNT(*) AS total 
        FROM usuarios
        WHERE usuario != '".$usuario."'
        AND email = '".$email."'
    ");

    $total_email = 0;

    foreach($resultado as $fila){
        $total_email = $fila['total'];
    }

    if( $total_email > 0 ) throw new Exception("El email (".$email."), ya esta siendo usado por otro usuario en la aplicación");

    if( $existe == 1 ){

        $update = $conexion->ejecutarConsulta("
            UPDATE usuarios SET 
            nombre='".$nombre."',
            email='".$email."',
            clave='".$clave."',
            usuario_actualizacion='".$_SESSION['usuario']."',
            fecha_actualizacion=NOW()
            WHERE 
            usuario = '".$usuario."'
        ");

        if( !$update ) throw new Exception("Error al actualizar el usuario");

        $respuesta->mensaje = "Usuario actualizado con éxito";

    }

}catch(Exception $e){
    $respuesta->estado = 2;
    $respuesta->mensaje = $e->getMessage();
}

print_r(json_encode($respuesta));