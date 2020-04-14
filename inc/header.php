<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php   

    for ($f=0; $f<count($varAcceso['framework']); $f++){

        switch($varAcceso['framework'][$f]){
            case 'bootstrap';
            echo '<link href="lib/css/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>';
                
             break;

        }


    }
    ?>
  

    <link href="css/system.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="img/system/favicon.ico?v=<?php echo $parametro['webversion']; ?>" rel="icon" type="image/x-icon"/>
    <link href="css/system.css?v=<?php echo $pagina; ?>" rel="stylesheet" type="text/css"/>
    <title>Medios | M&R Consultores</title>
</head>
<body>

<!-- Parametros de la apliccion -->
<input type="hidden" id="param_timeout" value="<?php echo $parametro['timeout']; ?>">

 <!-- Modal Advertencia -->
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
            </div>
        </div>
    </div>

    

    <!-- Modal Peligro -->
    <div class="modal fade" id="myModalDanger" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Peligro</h4>
            </div>
            <div class="modal-body text-center" id="myModalDangerBody"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Exito -->
    <div class="modal fade" id="myModalSuccess" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content panel-success">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Éxito</h4>
            </div>
            <div class="modal-body text-center" id="myModalSuccessBody"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

<!-------------------------------------------->
<div class="container">
