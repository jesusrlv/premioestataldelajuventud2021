<html>
<header>
        <link rel="shortcut icon" href="../../../img/mini_logo_cigo.ico" />  

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>
<?php    
    session_start();
    include('conn.php');
    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    
    $id=$_SESSION['id'];
    $tipo_doc = 9;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    // $link= 'archivo9';
    $validacion = 1;

    $link_youtube = $_POST['file9'];

    // $ruta = "archivos/". $link .'_'. $id .'.'.$extension;
    
    $sqlinsert= "INSERT INTO docs(id_ext,ruta,tipo_doc,fecha_agregado,validacion) 
    VALUES('$id','$link_youtube','$tipo_doc','$fecha_sistema','$validacion')";
    $resultado2= $conn->query($sqlinsert);


    if($resultado2){

        echo "<script type=\"text/javascript\">Swal.fire(
            'Proceso exitoso',
            'Video agregado',
            'success'
          ).then(function(){location.href='../seccion4.php';}
        
          
        
        );</script>";
    }
    
    else{
        echo "<script type=\"text/javascript\">Swal.fire(
            'Advertencia',
            'No agregado',
            'warning'
          ).then(function(){window.location=history.go(-1);}
        
          
        
        );</script>";
    
    }

    
?>
