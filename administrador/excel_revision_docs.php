<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte_datos_personales.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
session_start();
include('../dashboard/prcd/conn.php');

session_start();

include('../dashboard/prcd/conn.php');
include('../dashboard/prcd/qwery_admin.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>



            <table class="table table-hover text-center table-striped table-sm small">

            <thead class="thead-dark">
                <tr">
                  <th scope="col" class="align-middle">#</th>
                  <th scope="col" class="align-middle">Apellido</th>
                  <th scope="col" class="align-middle">Nombre</th>
                  <th scope="col" class="align-middle">Edad</th>
                  <th scope="col" class="align-middle">Grado escolar</th>
                  <th scope="col" class="align-middle">Teléfono</th>
                  <th scope="col" class="align-middle">Municipio</th>
                  <th scope="col" class="align-middle">CURP</th>
                  <th scope="col" class="align-middle">Correo electrónico</th>
                  <th scope="col" class="align-middle">Categoría</th>
                  <!-- <th scope="col">Acción</th> -->
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_generales->fetch_assoc()){

                // validacion de 9 docs
                // $id_validacion = $row_usr['id_ext'];
                // $query = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                // $resultado= $conn->query($query);
                // $row=$resultado->fetch_assoc();
                // $row_cnt = $resultado->num_rows;

                // if($row_cnt == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr['apellido'].'</td>';
                echo '<td>'.$row_usr['nombre'].'</td>';
                echo '<td>'.$row_usr['edad'].'</td>';
                // echo '<td>'.$row_usr['grado'].'</td>';

                $id_grado=$row_usr['grado'];
                $grado = "SELECT * FROM grado WHERE id ='$id_grado'";
                $resultado_grado= $conn->query($grado);
                $row_grado=$resultado_grado->fetch_assoc();
                echo '<td>'.$row_grado['grado'].'</td>';

                echo '<td>'.$row_usr['telefono'].'</td>';
                // echo '<td>'.$row_usr['municipio'].'</td>';
                $id_municipio=$row_usr['municipio'];
                $municipio = "SELECT * FROM municipio WHERE id ='$id_municipio'";
                $resultado_municipio= $conn->query($municipio);
                $row_municipio=$resultado_municipio->fetch_assoc();
                echo '<td>'.$row_municipio['municipio'].'</td>';

                echo '<td>'.$row_usr['curp'].'</td>';
                echo '<td>'.$row_usr['email'].'</td>';
                // echo '<td>'.$row_usr['tematica'].'</td>';
                $id_tematica=$row_usr['tematica'];
                $tematica = "SELECT * FROM categorias WHERE id ='$id_tematica'";
                $resultado_tematica= $conn->query($tematica);
                $row_tematica=$resultado_tematica->fetch_assoc();
                echo '<td>'.$row_tematica['nombre'].'</td>';

                // echo '<td><a href="docs_admin.php?id='.$row_usr['id_ext'].'&id_cat=1" class="h3"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>';
                echo '</tr>';
                
                // } 
              }
              ?>
            </tbody>
                <hr>
            </table>
        

    

