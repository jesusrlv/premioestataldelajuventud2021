<?php
// $id = $_SESSION['categoria'];
    
// logro académico
    $query_usr="SELECT * FROM usr WHERE categoria = 1 and perfil = 3";
    $resultado_usr= $conn->query($query_usr);
// discapacidad e integración
    $query_usr2="SELECT * FROM usr WHERE categoria = 2 and perfil = 3";
    $resultado_usr2= $conn->query($query_usr2);
// ingenio emp
    $query_usr3="SELECT * FROM usr WHERE categoria = 3 and perfil = 3";
    $resultado_usr3= $conn->query($query_usr3);
// resp social
    $query_usr4="SELECT * FROM usr WHERE categoria = 4 and perfil = 3";
    $resultado_usr4= $conn->query($query_usr4);
// mérito migrante
    $query_usr5="SELECT * FROM usr WHERE categoria = 5 and perfil = 3";
    $resultado_usr5= $conn->query($query_usr5);
// mérito campesino
    $query_usr6="SELECT * FROM usr WHERE categoria = 6 and perfil = 3";
    $resultado_usr6= $conn->query($query_usr6);
// literatura
    $query_usr7="SELECT * FROM usr WHERE categoria = 7 and perfil = 3";
    $resultado_usr7= $conn->query($query_usr7);
// artes plásticas, visuales y populares
    $query_usr8="SELECT * FROM usr WHERE categoria = 8 and perfil = 3";
    $resultado_usr8= $conn->query($query_usr8);
// arte urbano
    $query_usr9="SELECT * FROM usr WHERE categoria = 9 and perfil = 3";
    $resultado_usr9= $conn->query($query_usr9);
// ciencia y tecnología
    $query_usr10="SELECT * FROM usr WHERE categoria = 10 and perfil = 3";
    $resultado_usr10= $conn->query($query_usr10);

    ?>