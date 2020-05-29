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

             case 'treeview';
             echo '<link href="lib/js/jquery-treeview/jquery.treeview.css" rel="stylesheet" type="text/css"/>';
                 
              break;

              case 'choosenjs';
              echo '<link href="lib/js/chosen_v1.8.7/chosen.min.css" rel="stylesheet" type="text/css"/>';
                  
               break;

               case 'datatable';
               echo '<link href="lib/js/DataTables-1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>';
                   
                break;
  
               case 'datatable';
               echo '<link href="lib/js/DataTables-1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>';
                   
                break;

                case 'datatable';
                echo '<link href="lib/js/DataTables-1.10.21/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>';
                    
                 break;
 

        }


    }
    ?>
  

    <link href="css/system.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="css/login.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="css/<?php echo $pagina; ?>.css?v=<?php echo $parametro['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="img/system/favicon.ico?v=<?php echo $parametro['webversion']; ?>" rel="icon" type="image/x-icon"/>
    <link href="css/system.css?v=<?php echo $pagina; ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title><?php echo  $varAcceso['nombre']; ?> | M&R Consultores</title>
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
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">M&R Consultores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <?php
$listaMenu = "";
for($f = 0; $f<count($vectorMenu); $f++){
   if( $vectorMenu [$f] ['es_menu']== 'SI'){

    $menuAbierto ='';
    $listaMenuInt ='<ul>';
    for($i = 0; $i<count($vectorMenu); $i++){

        if( $vectorMenu [$i] ['es_menu']== 'NO' && 
            $vectorMenu [$i] ['idpadre']== $vectorMenu[$f]['idmenu']
        ){

            if($pagina == $vectorMenu[$i]['ventana']){

                $menuAbierto ='class ="active"';
            }

    
      
           
          
            $listaMenuInt .='<div class= "dropdown-menu" aria-labelledby="navbarDropdown">';
            $listaMenuInt .='<a class="dropdown-item" href="index.php?pagina='.$vectorMenu[$i]['ventana'].'">';
            $listaMenuInt .='<i class="fas '.$vectorMenu[$i]['icono'].'"></i>';       
            $listaMenuInt .=$vectorMenu [$i]['nombre'];
            $listaMenuInt .='</a>';
            $listaMenuInt .='</div>';
            
          
          
        }

    }



    $listaMenuInt .='</ul>';
    $listaMenu .='<li class="nav-item dropdown"> ';
    $listaMenu .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
    $listaMenu .='<i class="fas '.$vectorMenu[$f]['icono'].'"></i>'.$vectorMenu[$f]['nombre'];
    $listaMenu .=' </a>';
   
    $listaMenu .= $listaMenuInt;

        
    $listaMenu .='</li >';

   }

}
  echo $listaMenu;
?>


    </ul>
    <ul class="navbar-nav">
  
    <li class="nav-item ">
  
 <a class="nav-link"> Bienvenido: <b><?php echo $_SESSION['nombre'];?></b></a>

      </li>
      <li class="nav-item">
        <a class="nav-link " href="util/system/logout.php">Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </div>
</nav>