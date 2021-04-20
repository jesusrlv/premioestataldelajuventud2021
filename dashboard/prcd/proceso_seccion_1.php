<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

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

$curp = $_SESSION['usr'];
$tematica = $_POST['tematica'];
$edad = $_POST['edad'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
// $correo = $_POST['correo'];
$correo = $_SESSION['correo'];
$id_ext = $_SESSION['id'];
$tipo_usr = 1;
$validacion = 2;
$municipio = $_POST['municipio'];
$grado = $_POST['grado'];

$sql="INSERT INTO datos(tematica,edad,apellido,nombre,curp,telefono,id_ext,tipo_usr,validacion,municipio,grado,email) 
VALUES('$tematica','$edad','$apellido','$nombre','$curp','$telefono','$id_ext','$tipo_usr','$validacion','$municipio','$grado','$correo')";
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
  // echo $conn->error;
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'No agregado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}

?>