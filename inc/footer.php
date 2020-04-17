

</div>
<footer class="text-right" >
<hr>
<p>Desarrollado Por M&R Consultores &copy;  2020</p>
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
 

        }


    }
    ?>



<script type="text/javascript" language="javascript" src="js/system.js?v=<?php echo $parametro['webversion']; ?>"></script>
    <script type="text/javascript" language="javascript" src="js/<?php echo $pagina; ?>.js?v=<?php echo $parametro['webversion']; ?>"></script>
</html>