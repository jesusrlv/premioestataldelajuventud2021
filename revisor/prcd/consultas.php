<?php
    // curriculum
    $documento1 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 2";
    $resultado1= $conn->query($documento1);
    $row1=$resultado1->fetch_assoc();

    // semblanza
    $documento2 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 3";
    $resultado2= $conn->query($documento2);
    $row2=$resultado2->fetch_assoc();

    // material bibliográfico
    $documento3 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 8";
    $resultado3= $conn->query($documento3);
    $row3=$resultado3->fetch_assoc();

    // video
    $documento4 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 9";
    $resultado4= $conn->query($documento4);
    $row4=$resultado4->fetch_assoc();

    // documentos personales

    // credencial
    $documento5 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 5";
    $resultado5= $conn->query($documento5);
    $row5=$resultado5->fetch_assoc();

    // carta propuesta
    $documento6 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 1";
    $resultado6= $conn->query($documento6);
    $row6=$resultado6->fetch_assoc();

    // acta
    $documento7 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 4";
    $resultado7= $conn->query($documento7);
    $row7=$resultado7->fetch_assoc();

    // comprobante
    $documento8 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 6";
    $resultado8= $conn->query($documento8);
    $row8=$resultado8->fetch_assoc();

    // curp
    $documento9 = "SELECT * FROM docs WHERE id_ext = '$postulante' AND tipo_doc = 7";
    $resultado9= $conn->query($documento9);
    $row9=$resultado9->fetch_assoc();


    // consulta de edicion

    // todas 
    $documento_consulta = "SELECT * FROM calificacion WHERE id_ext1 = '$postulante' AND id_ext2 = '$revisor'";
    $resultado_consulta= $conn->query($documento_consulta);
    $row_consulta=$resultado_consulta->fetch_assoc();

?>