<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_general_PEJ21.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
session_start();
include('../dashboard/prcd/conn.php');

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>



            <table class="table table-hover text-center table-striped table-reponsive">
                        <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jurado</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Currículum<br>Vitae</th>
                            <th scope="col">Semblanza<br>de trayectoria</th>
                            <th scope="col">Material<br>bibliográfico</th>
                            <th scope="col">Video</th>
                            <th scope="col">Promedio</th>
                            <th scope="col">Observaciones</th>
                        </tr>
                        </thead>
                        <tbody>
        <?php
          
        //   $sql_usr = "SELECT * FROM datos WHERE id_ext = '$id_consulta'";
          
        $sql_usr = "SELECT * FROM calificacion INNER JOIN usr ON calificacion.id_ext2 = usr.id WHERE usr.perfil = 3  ORDER BY usr.categoria ASC, usr.nombre ASC";
        // $sql_usr = "SELECT * FROM calificacion ORDER BY categoria ASC";
        $resultado_usr = $conn->query($sql_usr);
        //   $row_usr = $resultado_usr->fetch_assoc();
        $y=0;
          while($row_usr = $resultado_usr->fetch_assoc()){

          
        ?>
        <!-- <p class="h5">CATEGORIA: <?php //echo $row_usr['categoria']?></p> -->
        <!-- <p><strong>NOMBRE:</strong> <?php //echo $row_usr['usuario']?></p> -->

            



            <?php
            
            
            
             $y++;
             echo '<tr>';
             echo '<td>'.$y.'</td>';
                // $id_revisor = $row['id_ext2'];
                // $sql_revisor = "SELECT * FROM usr WHERE id = '$id_revisor' AND perfil = 3";
                // $resultado_revisor= $conn->query($sql_revisor);
                // $row_revisor=$resultado_revisor->fetch_assoc();
              
            echo '<td>'.$row_usr['usuario'].'</td>';

            // $categoria = $row_usr['categoria'];

            $id_cat=$row_usr['categoria'];
            $categoria = "SELECT categorias.id,categorias.nombre FROM categorias WHERE id ='$id_cat'";
            $resultado_categoria= $conn->query($categoria);
            $row_categoria=$resultado_categoria->fetch_assoc();
             echo '<td>'.utf8_encode($row_categoria['nombre']).'</td>';

            
            //  echo '<td>'.$row_usr['categoria'].'</td>';

            // echo '<td>'.$row_usr['id_ext1'].'</td>';
            $id_ext=$row_usr['id_ext1'];
            $postulante = "SELECT datos.id_ext,datos.nombre,datos.apellido FROM datos WHERE id_ext ='$id_ext'";
            $resultado_postulante= $conn->query($postulante);
            $row_postulante=$resultado_postulante->fetch_assoc();
             echo '<td>'.utf8_encode($row_postulante['apellido']).' '.$row_postulante['nombre'].'</td>';

             echo '<td>'.$row_usr['doc1'].'</td>';
             echo '<td>'.$row_usr['doc2'].'</td>';
             echo '<td>'.$row_usr['doc3'].'</td>';
             echo '<td>'.$row_usr['doc4'].'</td>';
             
             $doc1 = $row_usr['doc1'];
             $doc2 = $row_usr['doc2'];
             $doc3 = $row_usr['doc3'];
             $doc4 = $row_usr['doc4'];
             $promedio = ($doc1 + $doc2 + $doc3 + $doc4)/4;

             echo '<td><strong>'.$promedio.'</strong></td>';
             echo '<td>'.utf8_encode($row_usr['observaciones']).'</td>';

             echo '</tr>';
        //    }

        // while
            }
        // while
           
            ?>

              
            </tbody>
              <hr>
          </table>

<?
