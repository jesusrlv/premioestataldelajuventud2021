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
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['username'];
    $pass = $_POST['pwd'];
    $pwd = md5($pass);
    $perfil = 2;

    $sql = "INSERT INTO usr (nombre,usuario,pwd,perfil) VALUES ('$nombre','$usuario','$pwd','$perfil')";
    $resultado= $conn->query($sql);
        if($resultado){

            echo "<script type=\"text/javascript\">Swal.fire(
                'Proceso exitoso',
                'Administrador agregado',
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