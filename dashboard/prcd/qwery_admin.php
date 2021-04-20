<?php
// $id = $_SESSION['categoria'];
    

// logro académico
    $query_usr="SELECT * FROM datos WHERE tematica = 1 and tipo_usr = 1";
    $resultado_usr= $conn->query($query_usr);
// logro académico 2
    $query_usr2="SELECT * FROM datos WHERE tematica = 2 and tipo_usr = 1";
    $resultado_usr2= $conn->query($query_usr2);
// Discapacidad e Integración
    $query_usr3="SELECT * FROM datos WHERE tematica = 3 and tipo_usr = 1";
    $resultado_usr3= $conn->query($query_usr3);
// Ingenio Emprendedor
    $query_usr4="SELECT * FROM datos WHERE tematica = 4 and tipo_usr = 1";
    $resultado_usr4= $conn->query($query_usr4);
// Responsabilidad Social
    $query_usr5="SELECT * FROM datos WHERE tematica = 5 and tipo_usr = 1";
    $resultado_usr5= $conn->query($query_usr5);
// Mérito Migrante
    $query_usr6="SELECT * FROM datos WHERE tematica = 6 and tipo_usr = 1";
    $resultado_usr6= $conn->query($query_usr6);
// Mérito Campesino
    $query_usr7="SELECT * FROM datos WHERE tematica = 7 and tipo_usr = 1";
    $resultado_usr7= $conn->query($query_usr7);
// Protección al Medio Ambiente
    $query_usr8="SELECT * FROM datos WHERE tematica = 8 and tipo_usr = 1";
    $resultado_usr8= $conn->query($query_usr8);
// Cultura Cívica, Política y Democracia
    $query_usr9="SELECT * FROM datos WHERE tematica = 9 and tipo_usr = 1";
    $resultado_usr9= $conn->query($query_usr9);
// Literatura
    $query_usr10="SELECT * FROM datos WHERE tematica = 10 and tipo_usr = 1";
    $resultado_usr10= $conn->query($query_usr10);
// Artes Escénicas (musica)
    $query_usr11="SELECT * FROM datos WHERE tematica = 11 and tipo_usr = 1";
    $resultado_usr11= $conn->query($query_usr11);
// Artes Escénicas (teatro)
    $query_usr12="SELECT * FROM datos WHERE tematica = 12 and tipo_usr = 1";
    $resultado_usr12= $conn->query($query_usr12);
// Artes Escénicas (danza)
    $query_usr13="SELECT * FROM datos WHERE tematica = 13 and tipo_usr = 1";
    $resultado_usr13= $conn->query($query_usr13);
// Artes Plásticas, Visuales y Populares
    $query_usr14="SELECT * FROM datos WHERE tematica = 14 and tipo_usr = 1";
    $resultado_usr14= $conn->query($query_usr14);
// Arte Urbano (Grafiti)
    $query_usr15="SELECT * FROM datos WHERE tematica = 15 and tipo_usr = 1";
    $resultado_usr15= $conn->query($query_usr15);
// ciencia y tecnología
    $query_usr16="SELECT * FROM datos WHERE tematica = 16 and tipo_usr = 1";
    $resultado_usr16= $conn->query($query_usr16);


    // datos generales
    $query_generales="SELECT * FROM datos WHERE tipo_usr = 1 ORDER BY tematica ASC";
    $resultado_generales= $conn->query($query_generales);

    // ganadores
    $query_ganadores="SELECT * FROM datos WHERE tipo_usr = 1 AND medal = 1 ORDER BY tematica ASC";
    $resultado_ganadores= $conn->query($query_ganadores);

    

    ?>