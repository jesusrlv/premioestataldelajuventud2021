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

$id_ext = $_SESSION['id'];

$no_cuenta = $_POST['no_cuenta'];
$clabe = $_POST['clabe'];
$banco = $_POST['banco'];
$sucursal = $_POST['sucursal'];
$concepto = $_POST['concepto'];
$validacion = 1;


$sql="INSERT INTO banco(id_ext,banco,no_cuenta,no_clabe,sucursal,concepto,validacion) 
VALUES('$id_ext','$banco','$no_cuenta','$clabe','$sucursal','$concepto','$validacion')";
$resultado= $conn->query($sql);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Datos agregados',
        'success'
      ).then(function(){location.href='../dashboard.php';}
    
      
    
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