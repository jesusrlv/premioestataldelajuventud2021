<html>
<header>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php    
    session_start();
    include('../conn2.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    
    $id=$_SESSION['id'];
    $video = $_POST['file9'];
    
    $sql="UPDATE docs SET ruta='$video' WHERE id_ext='$id' AND tipo_doc=9";
    $resultado= $conn->query($sql);

    if($resultado){

        echo "<script type=\"text/javascript\">Swal.fire(
            'Proceso exitoso',
            'Datos actualizados',
            'success'
        ).then(function(){location.href='../../seccion4_visualizar.php';}
        
        
        
        );</script>";
    }

    else{
        echo "<script type=\"text/javascript\">Swal.fire(
            'Advertencia',
            'No actualizados',
            'warning'
        ).then(function(){window.location=history.go(-1);}
        
        
        
        );</script>";

    }
?>
