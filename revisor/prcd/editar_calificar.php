<html>
<header>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
// session_start();
include('../../dashboard/prcd/conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$id_postulante = $_POST['postulante'];
$id_revisor = $_POST['revisor'];
$doc1 = $_POST['curriculum'];
$doc2 = $_POST['semblanza'];
$doc3 = $_POST['mbibliografico'];
$doc4 = $_POST['video'];
$comentarios = $_POST['comentarios'];

$sql="UPDATE calificacion SET doc1='$doc1',doc2='$doc2',doc3='$doc3',doc4='$doc4',observaciones='$comentarios' WHERE id_ext1='$id_postulante' AND id_ext2='$id_revisor'";

    $resultado= $conn->query($sql);

    if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Postulante actualizado',
        'success'
      ).then(function(){location.href='../dashboard.php';}
    );</script>";
}

else{
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'No calificado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    );</script>";

}


?>

</html>