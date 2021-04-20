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

$sqlinsert= "INSERT INTO calificacion(id_ext1,id_ext2,doc1,doc2,doc3,doc4,observaciones,hora_calificacion) 
    VALUES('$id_postulante','$id_revisor','$doc1','$doc2','$doc3','$doc4','$comentarios','$fecha_sistema')";
    $resultado= $conn->query($sqlinsert);

    if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Postulante calificado',
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