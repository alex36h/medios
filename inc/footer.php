

</div>
<footer class="text-right" >
<hr>
<p> <strong> Desarrollado Por M&R Consultores &copy; 2020 </strong></p>
</footer>
</body>

<?php   

    for ($f=0; $f<count($varAcceso['framework']); $f++){

        switch($varAcceso['framework'][$f]){
            case 'bootstrap';
            echo '<script type="text/javascript" language="javascript" src="lib/css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>';
                
             break;

             case 'jquery';
             echo '<script type="text/javascript" language="javascript" src="lib/js/jquery/jquery-3.4.1.min.js"></script>';
                 
              break;
              
              case 'highcharts';
             echo '<script type="text/javascript" language="javascript" src="lib/js/Highcharts-8.0.4/code/highcharts.js"></script>';
                 
              break;

              case 'treeview';
              echo '<script type="text/javascript" language="javascript" src="lib/js/jquery-treeview/jquery.treeview.js"></script>';
                  
               break;


              case 'choosenjs';
              echo '<script type="text/javascript" language="javascript" src="lib/js/chosen_v1.8.7/chosen.jquery.min.js"></script>';
                  
               break;
         }


    }
    ?>

<script type="text/javascript" language="javascript" src="js/system.js?v=<?php echo $parametro['webversion']; ?>"></script>
    <script type="text/javascript" language="javascript" src="js/<?php echo $pagina; ?>.js?v=<?php echo $parametro['webversion']; ?>"></script>
</html>