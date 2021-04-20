<html>
<header>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
session_start();
include('conn.php');

$ganador = $_REQUEST['id'];
$cambiar = 1;

$sql="UPDATE datos SET medal = '$cambiar' WHERE id_ext = '$ganador'";

$resultado= $conn->query($sql);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Ganador actualizado',
        'success'
      ).then(function(){location.href='../../administrador/revision_calificaciones.php';}
    
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
</html>