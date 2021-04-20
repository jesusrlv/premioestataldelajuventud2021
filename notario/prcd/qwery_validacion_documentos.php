<?php

    include('../../dashboard/prcd/conn.php');
    
     
    $query4="SELECT * FROM docs WHERE id_ext='$id'";
    $resultado4= $conn->query($query4);
    // $row4=$resultado4->fetch_assoc();
        
        while($row4 = $resultado4->fetch_assoc()){
            $x = $x + $row4['validacion'];
        }
     

        
$usuarios = "SELECT * FROM datos";
$resultado_usuarios = $resultado= $conn->query($query);
        
    while($row_usr=$resultado_usuarios->fetch_assoc()){

        $id = $row_usr['id_ext'];
       
        
        $query = "SELECT * FROM docs WHERE id_ext='$id'";
        $resultado= $conn->query($query);
        $row=$resultado->fetch_assoc();


        $row_cnt = $resultado->num_rows;

            // printf("Result set has %d rows.\n".$row_cnt."con el id.\n".$id);
            echo "Result set has %d rows ".$row_cnt."con el id ".$id;

    }





    ?>
