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
    include('../../dashboard/prcd/conn.php');

    $id = $_SESSION['id'];
    $categoria = $_SESSION['categoria'];
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['username'];
    $pass = $_POST['pwd'];
    $pwd = md5($pass);
    $categoria = $_POST['tematica'];
    $perfil = 3;

    $sql = "INSERT INTO usr (nombre,usuario,pwd,categoria,perfil) VALUES ('$nombre','$usuario','$pwd','$categoria','$perfil')";
    $resultado= $conn->query($sql);
        if($resultado){

            echo "<script type=\"text/javascript\">Swal.fire(
                'Proceso exitoso',
                'Jurado agregado',
                'success'
                ).then(function(){location.href='../dashboard.php';}
            
            
            
            );</script>";
        }

        else{
            echo "<script type=\"text/javascript\">Swal.fire(
                'Advertencia',
                'Usuario no agregado',
                'warning'
            ).then(function(){window.location=history.go(-1);}
            
            
            
            );</script>";

        }

?>

</html>