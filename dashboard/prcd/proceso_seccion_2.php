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

$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$num_int = $_POST['num_int'];
$num_ext = $_POST['num_ext'];
$email = $_POST['email'];
$tel_of = $_POST['tel_of'];
$tel_cel = $_POST['tel_cel'];
$validacion = 1;

$tipo_usr = 1;

$sql="INSERT INTO direccion(id_ext,colonia,cp,n_int,n_ext,email,tel_of,tel_cel,validacion) 
VALUES('$id_ext','$colonia','$cp','$num_int','$num_ext','$email','$tel_of','$tel_cel'.'$validacion')";
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