<?php
$id = $_SESSION['categoria'];
    
// Admin
    $query_usr="SELECT * FROM usr WHERE perfil = 2";
    $resultado_usr= $conn->query($query_usr);
    
// Jur
    $query_jur="SELECT * FROM usr WHERE perfil = 3 ORDER BY categoria";
    $resultado_jur= $conn->query($query_jur);


    ?>