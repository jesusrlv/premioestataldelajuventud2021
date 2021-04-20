<?php
$id = $_SESSION['id'];
    // include('prcd/conn.php');

    
    $query="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 1";
    $resultado= $conn->query($query);
    $row=$resultado->fetch_assoc();
     
    $query2="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 2";
    $resultado2= $conn->query($query2);
    $row2=$resultado2->fetch_assoc();
     
    $query3="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 3";
    $resultado3= $conn->query($query3);
    $row3=$resultado3->fetch_assoc();
     
    $query4="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 4";
    $resultado4= $conn->query($query4);
    $row4=$resultado4->fetch_assoc();
     
    $query5="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 5";
    $resultado5= $conn->query($query5);
    $row5=$resultado5->fetch_assoc();
     
    $query6="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 6";
    $resultado6= $conn->query($query6);
    $row6=$resultado6->fetch_assoc();
     
    $query7="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 7";
    $resultado7= $conn->query($query7);
    $row7=$resultado7->fetch_assoc();
     
    $query8="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 8";
    $resultado8= $conn->query($query8);
    $row8=$resultado8->fetch_assoc();
     
    $query9="SELECT * FROM docs WHERE id_ext='$id' AND tipo_doc = 9";
    $resultado9= $conn->query($query9);
    $row9=$resultado9->fetch_assoc();

    ?>
