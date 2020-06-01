<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="lib/css/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/login.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="img/system/favicon.ico?v=<?php echo $parametro['webversion']; ?>" rel="icon" type="image/x-icon"/>
    <title>Medios | M&R Consultores</title>
</head>
<body>




<div class="modal fade" id="myModalWarning" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content panel-warning">
      <div class="modal-header panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Advertencia</h4>
      </div>
      <div class="modal-body text-center" id="myModalWarningBody"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.myrconsultores.com/wp-content/uploads/2020/02/myrthumb-1.png" id="icon" alt="Responsive image" />
    </div>

    <!-- Login Form -->
    <form role="form" id="formLogin">
      <input type="text" id="usuario" class="login fadeIn second" name="user" placeholder="Usuario">
      <input type="password" id="clave" class="login fadeIn third" name="login" placeholder="Contraseña">
      <input type="submit" class="login fadeIn fourth" value="Acceder">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvido su Contraseña?</a>
    </div>

  </div>
</div>







</body>




<script type="text/javascript" language="javascript" src="lib/js/jquery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" language="javascript" src="lib/css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/login.js?v=<?php echo $parametro['webversion']; ?>"></script>
</html>