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
include('../dashboard/prcd/qwery_admin.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>


            <table>
                <tr>
                <th colspan="6">
                    CATEGORIA: LOGRO ACADÉMICO (12 - 19 AÑOS)
                    </th>
                </tr>
            
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Estatus</th>
                </tr>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr->fetch_assoc()){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr['apellido'].'</td>';
                echo '<td>'.$row_usr['nombre'].'</td>';
                echo '<td>'.$row_usr['curp'].'</td>';
                echo '<td>'.$row_usr['email'].'</td>';

                // validacion de 9 docs
                $id_validacion = $row_usr['id_ext'];
                $query = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                $resultado= $conn->query($query);
                $row=$resultado->fetch_assoc();
                $row_cnt = $resultado->num_rows;
                if($row_cnt == 9){
                    echo '<td>Completo</td>';
                }
                else{
                    echo '<td>Incompleto</td>';
                }

                echo '</tr>';
                
                // } 
              }
              ?>

            </table>

        <!-- <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (20 - 29 AÑOS)</p> -->

            <table class="table table-hover text-center table-striped">
            <tr>
            <th colspan="6">
                    LOGRO ACADÉMICO (20 - 29 AÑOS)
                    </th>
                </tr>
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Estatus</th>
                </tr>
            </thead>
            <tbody>
            <?php
               $x=0;
              while($row_usr2 = $resultado_usr2->fetch_assoc()){
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr2['apellido'].'</td>';
                echo '<td>'.$row_usr2['nombre'].'</td>';
                echo '<td>'.$row_usr2['curp'].'</td>';
                echo '<td>'.$row_usr2['email'].'</td>';
                // validacion de 9 docs
                $id_validacion2 = $row_usr2['id_ext'];
                $query2 = "SELECT * FROM docs WHERE id_ext='$id_validacion2'";
                $resultado2= $conn->query($query2);
                $row2=$resultado2->fetch_assoc();
                $row_cnt2 = $resultado2->num_rows;
                if($row_cnt2 == 9){
                    echo '<td><span class="badge bg-info text-light">Completo</span></td>';
                }
                else{
                    echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
                }
                echo '</tr>';
              }
              ?>
               
            </tbody>
                <hr>
            </table>
        <!-- <p class=" h4">CATEGORIA: DISCAPACIDAD E INTEGRACIÓN</p> -->

            <table class="table table-hover text-center table-striped">
            <tr>
            <th colspan="6">
                    CATEGORIA: DISCAPACIDAD E INTEGRACIÓN
                    </th>
                </tr>
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Correo electrónico</th>
                  <th scope="col">Estatus</th>
                </tr>
            </thead>
            <tbody>
            <?php
               $x=0;
              while($row_usr3 = $resultado_usr3->fetch_assoc()){
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr3['apellido'].'</td>';
                echo '<td>'.$row_usr3['nombre'].'</td>';
                echo '<td>'.$row_usr3['curp'].'</td>';
                echo '<td>'.$row_usr3['email'].'</td>';
                // validacion de 9 docs
                $id_validacion3 = $row_usr3['id_ext'];
                $query3 = "SELECT * FROM docs WHERE id_ext='$id_validacion3'";
                $resultado3= $conn->query($query3);
                $row3=$resultado3->fetch_assoc();
                $row_cnt3 = $resultado3->num_rows;
                if($row_cnt3 == 9){
                    echo '<td><span class="badge bg-info text-light">Completo</span></td>';
                }
                else{
                    echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
                }
                echo '</tr>';
              }
              ?>
               
            </tbody>
                <hr>
            </table>
        <!-- <p class=" h4">CATEGORIA: INGENIO EMPRENDEDOR</p> -->

        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: INGENIO EMPRENDEDOR
                    </th>
                </tr>
          <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr4 = $resultado_usr4->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr4['apellido'].'</td>';
              echo '<td>'.$row_usr4['nombre'].'</td>';
              echo '<td>'.$row_usr4['curp'].'</td>';
              echo '<td>'.$row_usr4['email'].'</td>';
              // validacion de 9 docs
              $id_validacion4 = $row_usr4['id_ext'];
              $query4 = "SELECT * FROM docs WHERE id_ext='$id_validacion4'";
              $resultado4= $conn->query($query4);
              $row4=$resultado4->fetch_assoc();
              $row_cnt4 = $resultado4->num_rows;
              if($row_cnt4 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: RESPONSABILIDAD SOCIAL</p> -->
        
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: RESPONSABILIDAD SOCIAL
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr5 = $resultado_usr5->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr5['apellido'].'</td>';
              echo '<td>'.$row_usr5['nombre'].'</td>';
              echo '<td>'.$row_usr5['curp'].'</td>';
              echo '<td>'.$row_usr5['email'].'</td>';
              // validacion de 9 docs
              $id_validacion5 = $row_usr5['id_ext'];
              $query5 = "SELECT * FROM docs WHERE id_ext='$id_validacion5'";
              $resultado5= $conn->query($query5);
              $row5=$resultado5->fetch_assoc();
              $row_cnt5 = $resultado5->num_rows;
              if($row_cnt5 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: MÉRITO MIGRANTE</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: MÉRITO MIGRANTE
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr6 = $resultado_usr6->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr6['apellido'].'</td>';
              echo '<td>'.$row_usr6['nombre'].'</td>';
              echo '<td>'.$row_usr6['curp'].'</td>';
              echo '<td>'.$row_usr6['email'].'</td>';
              // validacion de 9 docs
              $id_validacion6 = $row_usr6['id_ext'];
              $query6 = "SELECT * FROM docs WHERE id_ext='$id_validacion6'";
              $resultado6= $conn->query($query6);
              $row6=$resultado6->fetch_assoc();
              $row_cnt6 = $resultado6->num_rows;
              if($row_cnt6 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: MÉRITO CAMPESINO</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">CATEGORÍA: MÉRITO CAMPESINO</th>
        </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr7 = $resultado_usr7->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr7['apellido'].'</td>';
              echo '<td>'.$row_usr7['nombre'].'</td>';
              echo '<td>'.$row_usr7['curp'].'</td>';
              echo '<td>'.$row_usr7['email'].'</td>';
              // validacion de 9 docs
              $id_validacion7 = $row_usr7['id_ext'];
              $query7 = "SELECT * FROM docs WHERE id_ext='$id_validacion7'";
              $resultado7= $conn->query($query7);
              $row7=$resultado7->fetch_assoc();
              $row_cnt7 = $resultado7->num_rows;
              if($row_cnt7 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: PROTECCIÓN AL MEDIO AMBIENTE</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: PROTECCIÓN AL MEDIO AMBIENTE
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr8 = $resultado_usr8->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr8['apellido'].'</td>';
              echo '<td>'.$row_usr8['nombre'].'</td>';
              echo '<td>'.$row_usr8['curp'].'</td>';
              echo '<td>'.$row_usr8['email'].'</td>';
              // validacion de 9 docs
              $id_validacion8 = $row_usr8['id_ext'];
              $query8 = "SELECT * FROM docs WHERE id_ext='$id_validacion8'";
              $resultado8= $conn->query($query8);
              $row8=$resultado8->fetch_assoc();
              $row_cnt8 = $resultado8->num_rows;
              if($row_cnt8 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORÍA: CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORÍA: CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr9 = $resultado_usr9->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr9['apellido'].'</td>';
              echo '<td>'.$row_usr9['nombre'].'</td>';
              echo '<td>'.$row_usr9['curp'].'</td>';
              echo '<td>'.$row_usr9['email'].'</td>';
              // validacion de 9 docs
              $id_validacion9 = $row_usr9['id_ext'];
              $query9 = "SELECT * FROM docs WHERE id_ext='$id_validacion9'";
              $resultado9= $conn->query($query9);
              $row9=$resultado9->fetch_assoc();
              $row_cnt9 = $resultado9->num_rows;
              if($row_cnt9 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: LITERATURA</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: LITERATURA
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Estatus</th>
                <th scope="col">Correo electrónico</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr10 = $resultado_usr10->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr10['apellido'].'</td>';
              echo '<td>'.$row_usr10['nombre'].'</td>';
              echo '<td>'.$row_usr10['curp'].'</td>';
              echo '<td>'.$row_usr10['email'].'</td>';
              // validacion de 9 docs
              $id_validacion10 = $row_usr10['id_ext'];
              $query10 = "SELECT * FROM docs WHERE id_ext='$id_validacion10'";
              $resultado10= $conn->query($query10);
              $row10=$resultado10->fetch_assoc();
              $row_cnt10 = $resultado10->num_rows;
              if($row_cnt10 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (MÚSICA)</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: ARTES ESCÉNICAS (MÚSICA)
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr11 = $resultado_usr11->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr11['apellido'].'</td>';
              echo '<td>'.$row_usr11['nombre'].'</td>';
              echo '<td>'.$row_usr11['curp'].'</td>';
              echo '<td>'.$row_usr11['email'].'</td>';
              // validacion de 9 docs
              $id_validacion11 = $row_usr11['id_ext'];
              $query11 = "SELECT * FROM docs WHERE id_ext='$id_validacion11'";
              $resultado11= $conn->query($query11);
              $row11=$resultado11->fetch_assoc();
              $row_cnt11 = $resultado11->num_rows;
              if($row_cnt11 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (TEATRO)</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: ARTES ESCÉNICAS (TEATRO)
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr12 = $resultado_usr12->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr12['apellido'].'</td>';
              echo '<td>'.$row_usr12['nombre'].'</td>';
              echo '<td>'.$row_usr12['curp'].'</td>';
              echo '<td>'.$row_usr12['email'].'</td>';
              // validacion de 9 docs
              $id_validacion12 = $row_usr12['id_ext'];
              $query12 = "SELECT * FROM docs WHERE id_ext='$id_validacion12'";
              $resultado12= $conn->query($query12);
              $row12=$resultado12->fetch_assoc();
              $row_cnt12 = $resultado12->num_rows;
              if($row_cnt12 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (DANZA)</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: ARTES ESCÉNICAS (DANZA)
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr13 = $resultado_usr13->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr13['apellido'].'</td>';
              echo '<td>'.$row_usr13['nombre'].'</td>';
              echo '<td>'.$row_usr13['curp'].'</td>';
              echo '<td>'.$row_usr13['email'].'</td>';
              // validacion de 9 docs
              $id_validacion13 = $row_usr13['id_ext'];
              $query13 = "SELECT * FROM docs WHERE id_ext='$id_validacion13'";
              $resultado13= $conn->query($query);
              $row13=$resultado13->fetch_assoc();
              $row_cnt13 = $resultado13->num_rows;
              if($row_cnt13 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: ARTES PLÁSTICAS, VISUALES Y POPULARES</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
        <th colspan="6">
                    CATEGORIA: ARTES PLÁSTICAS, VISUALES Y POPULARES
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr14 = $resultado_usr14->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr14['apellido'].'</td>';
              echo '<td>'.$row_usr14['nombre'].'</td>';
              echo '<td>'.$row_usr14['curp'].'</td>';
              echo '<td>'.$row_usr14['email'].'</td>';
              // validacion de 9 docs
              $id_validacion14 = $row_usr14['id_ext'];
              $query14 = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
              $resultado14= $conn->query($query14);
              $row14=$resultado14->fetch_assoc();
              $row_cnt14 = $resultado14->num_rows;
              if($row_cnt14 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: ARTE URBANO</p> -->
        <table class="table table-hover text-center table-striped">
            <tr>
            <th colspan="6">
            CATEGORIA: ARTE URBANO
            </th>
            </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr15 = $resultado_usr15->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr15['apellido'].'</td>';
              echo '<td>'.$row_usr15['nombre'].'</td>';
              echo '<td>'.$row_usr15['curp'].'</td>';
              echo '<td>'.$row_usr15['email'].'</td>';
              // validacion de 9 docs
              $id_validacion15 = $row_usr15['id_ext'];
              $query15 = "SELECT * FROM docs WHERE id_ext='$id_validacion15'";
              $resultado15= $conn->query($query15);
              $row15=$resultado15->fetch_assoc();
              $row_cnt15 = $resultado15->num_rows;
              if($row_cnt15 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        <!-- <p class=" h4">CATEGORIA: CIENCIA Y TECNOLOGÍA</p> -->
        <table class="table table-hover text-center table-striped">
        <tr>
                    <th colspan="6">
                    CATEGORIA: CIENCIA Y TECNOLOGÍA
                    </th>
                </tr>
        <thead class="thead-dark">
              <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">CURP</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Estatus</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $x=0;
            while($row_usr16 = $resultado_usr16->fetch_assoc()){
              $x++;
              echo '<tr>';
              echo '<td>'.$x.'</td>';
              echo '<td>'.$row_usr16['apellido'].'</td>';
              echo '<td>'.$row_usr16['nombre'].'</td>';
              echo '<td>'.$row_usr16['curp'].'</td>';
              echo '<td>'.$row_usr16['email'].'</td>';
              // validacion de 9 docs
              $id_validacion16 = $row_usr16['id_ext'];
              $query16 = "SELECT * FROM docs WHERE id_ext='$id_validacion16'";
              $resultado16= $conn->query($query16);
              $row16=$resultado16->fetch_assoc();
              $row_cnt16 = $resultado16->num_rows;
              if($row_cnt16 == 9){
                  echo '<td><span class="badge bg-info text-light">Completo</span></td>';
              }
              else{
                  echo '<td><span class="badge bg-danger text-light">Incompleto</span></td>';
              }
              echo '</tr>';
            }
            ?>
            
          </tbody>
              <hr>
          </table>
        


