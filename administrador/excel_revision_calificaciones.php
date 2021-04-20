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
include('../dashboard/prcd/PROTOTIPO_qwery_admin.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>


        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (12 - 19 AÑOS)</p>

            <table class="table table-hover text-center table-striped">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <!-- <th scope="col">Ganador</th> -->
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr_prototipo->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion = $row_usr['id_ext1'];
                $query = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                $resultado= $conn->query($query);
                $row=$resultado->fetch_assoc();
                $row_cnt = $resultado->num_rows;

                if($row_cnt == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta=$row_usr['id_ext1'];
                $consulta = "SELECT * FROM datos WHERE id_ext ='$id_consulta'";
                $resultado_consulta= $conn->query($consulta);
                $row_consulta=$resultado_consulta->fetch_assoc();

                echo '<td>'.$row_consulta['apellido'].'</td>';
                echo '<td>'.$row_consulta['nombre'].'</td>';
                echo '<td>'.$row_consulta['curp'].'</td>';
                echo '<td>'.$row_usr['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (20 - 29 AÑOS)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr2 = $resultado_usr2->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion2 = $row_usr2['id_ext1'];
                $query2 = "SELECT * FROM docs WHERE id_ext='$id_validacion2'";
                $resultado2= $conn->query($query2);
                $row2=$resultado2->fetch_assoc();
                $row_cnt2 = $resultado2->num_rows;

                if($row_cnt2 == 9){

                   
                    // SELECT AVG((doc1+doc2+doc3+doc4)/4) as promedio FROM calificacion WHERE id_ext1 = 16
                    
                    // $query_calificacion2 = "SELECT AVG((doc1+doc2+doc3+doc4)/4) as promedio FROM calificacion WHERE id_ext1 = '$id_validacion2' ORDER BY promedio ASC";
                    
                    // SEGUNDA CONSULTA
                    // SELECT id_ext1, AVG((doc1+doc2+doc3+doc4)/4)as 'promedio' 
                    // FROM calificacion  
                    // GROUP BY id_ext1 
                    // ORDER BY promedio DESC


                    // SELECT id_ext1, AVG((doc1+doc2+doc3+doc4)/4)as 'promedio' 
                    // FROM calificacion

                    // INNER JOIN datos
                    // ON datos.id_ext=calificacion.id_ext1

                    // GROUP BY id_ext1,tematica 
                    // ORDER BY promedio DESC
                       



                $x++;

                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta2=$row_usr2['id_ext1'];
                $consulta2 = "SELECT * FROM datos WHERE id_ext ='$id_consulta2'";
                $resultado_consulta2= $conn->query($consulta2);
                $row_consulta2=$resultado_consulta2->fetch_assoc();

                echo '<td>'.$row_consulta2['apellido'].'</td>';
                echo '<td>'.$row_consulta2['nombre'].'</td>';
                echo '<td>'.$row_consulta2['curp'].'</td>';
                echo '<td>'.$row_usr2['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr2['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: DISCAPACIDAD E INTEGRACIÓN</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr3 = $resultado_usr3->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion3 = $row_usr3['id_ext1'];
                $query3 = "SELECT * FROM docs WHERE id_ext='$id_validacion3'";
                $resultado3= $conn->query($query3);
                $row3=$resultado3->fetch_assoc();
                $row_cnt3 = $resultado3->num_rows;

                if($row_cnt3 == 9){

                    

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta3=$row_usr3['id_ext1'];
                $consulta3 = "SELECT * FROM datos WHERE id_ext ='$id_consulta3'";
                $resultado_consulta3= $conn->query($consulta3);
                $row_consulta3=$resultado_consulta3->fetch_assoc();

                echo '<td>'.$row_consulta3['apellido'].'</td>';
                echo '<td>'.$row_consulta3['nombre'].'</td>';
                echo '<td>'.$row_consulta3['curp'].'</td>';
                echo '<td>'.$row_usr['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr3['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: INGENIO EMPRENDEDOR</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr4 = $resultado_usr4->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion4 = $row_usr4['id_ext1'];
                $query4 = "SELECT * FROM docs WHERE id_ext='$id_validacion4'";
                $resultado4= $conn->query($query4);
                $row4=$resultado4->fetch_assoc();
                $row_cnt4 = $resultado4->num_rows;

                if($row_cnt4 == 9){

                
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta4=$row_usr4['id_ext1'];
                $consulta4 = "SELECT * FROM datos WHERE id_ext ='$id_consulta4'";
                $resultado_consulta4= $conn->query($consulta4);
                $row_consulta4=$resultado_consulta4->fetch_assoc();

                echo '<td>'.$row_consulta4['apellido'].'</td>';
                echo '<td>'.$row_consulta4['nombre'].'</td>';
                echo '<td>'.$row_consulta4['curp'].'</td>';
                echo '<td>'.$row_usr4['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr4['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: RESPONSABILIDAD SOCIAL</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr5 = $resultado_usr5->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion5 = $row_usr5['id_ext1'];
                $query5 = "SELECT * FROM docs WHERE id_ext='$id_validacion5'";
                $resultado5= $conn->query($query5);
                $row5=$resultado5->fetch_assoc();
                $row_cnt5 = $resultado5->num_rows;

                if($row_cnt5 == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta5=$row_usr5['id_ext1'];
                $consulta5 = "SELECT * FROM datos WHERE id_ext ='$id_consulta5'";
                $resultado_consulta5= $conn->query($consulta5);
                $row_consulta5=$resultado_consulta5->fetch_assoc();

                echo '<td>'.$row_consulta5['apellido'].'</td>';
                echo '<td>'.$row_consulta5['nombre'].'</td>';
                echo '<td>'.$row_consulta5['curp'].'</td>';
                echo '<td>'.$row_usr5['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr5['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: MÉRITO MIGRANTE</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr6 = $resultado_usr6->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion6 = $row_usr6['id_ext1'];
                $query6 = "SELECT * FROM docs WHERE id_ext='$id_validacion6'";
                $resultado6= $conn->query($query6);
                $row6=$resultado6->fetch_assoc();
                $row_cnt6 = $resultado6->num_rows;

                if($row_cnt6 == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta6=$row_usr6['id_ext1'];
                $consulta6 = "SELECT * FROM datos WHERE id_ext ='$id_consulta6'";
                $resultado_consulta6= $conn->query($consulta6);
                $row_consulta6=$resultado_consulta6->fetch_assoc();

                echo '<td>'.$row_consulta6['apellido'].'</td>';
                echo '<td>'.$row_consulta6['nombre'].'</td>';
                echo '<td>'.$row_consulta6['curp'].'</td>';
                echo '<td>'.$row_usr6['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr6['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: MÉRITO CAMPESINO</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr7 = $resultado_usr7->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion7 = $row_usr7['id_ext1'];
                $query7 = "SELECT * FROM docs WHERE id_ext='$id_validacion7'";
                $resultado7= $conn->query($query7);
                $row7=$resultado7->fetch_assoc();
                $row_cnt7 = $resultado7->num_rows;

                if($row_cnt7 == 9){

                
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta7=$row_usr7['id_ext1'];
                $consulta7 = "SELECT * FROM datos WHERE id_ext ='$id_consulta7'";
                $resultado_consulta7= $conn->query($consulta7);
                $row_consulta7=$resultado_consulta7->fetch_assoc();

                echo '<td>'.$row_consulta7['apellido'].'</td>';
                echo '<td>'.$row_consulta7['nombre'].'</td>';
                echo '<td>'.$row_consulta7['curp'].'</td>';
                echo '<td>'.$row_usr7['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr7['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: PROTECCIÓN AL MEDIO AMBIENTE</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr8 = $resultado_usr8->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion8 = $row_usr8['id_ext1'];
                $query8 = "SELECT * FROM docs WHERE id_ext='$id_validacion8'";
                $resultado8= $conn->query($query8);
                $row8=$resultado8->fetch_assoc();
                $row_cnt8 = $resultado8->num_rows;

                if($row_cnt8 == 9){

                    
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta8=$row_usr8['id_ext1'];
                $consulta8 = "SELECT * FROM datos WHERE id_ext ='$id_consulta8'";
                $resultado_consulta8= $conn->query($consulta8);
                $row_consulta8=$resultado_consulta8->fetch_assoc();

                echo '<td>'.$row_consulta8['apellido'].'</td>';
                echo '<td>'.$row_consulta8['nombre'].'</td>';
                echo '<td>'.$row_consulta8['curp'].'</td>';
                echo '<td>'.$row_usr8['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr8['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORÍA: CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr9 = $resultado_usr9->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion9 = $row_usr9['id_ext1'];
                $query9 = "SELECT * FROM docs WHERE id_ext='$id_validacion9'";
                $resultado9= $conn->query($query9);
                $row9=$resultado9->fetch_assoc();
                $row_cnt9 = $resultado9->num_rows;

                if($row_cnt9 == 9){

                    

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta9=$row_usr9['id_ext1'];
                $consulta9 = "SELECT * FROM datos WHERE id_ext ='$id_consulta9'";
                $resultado_consulta9= $conn->query($consulta9);
                $row_consulta9=$resultado_consulta9->fetch_assoc();

                echo '<td>'.$row_consulta9['apellido'].'</td>';
                echo '<td>'.$row_consulta9['nombre'].'</td>';
                echo '<td>'.$row_consulta9['curp'].'</td>';
                echo '<td>'.$row_usr9['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr9['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: LITERATURA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr10 = $resultado_usr10->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion10 = $row_usr10['id_ext1'];
                $query10 = "SELECT * FROM docs WHERE id_ext='$id_validacion10'";
                $resultado10= $conn->query($query10);
                $row10=$resultado10->fetch_assoc();
                $row_cnt10 = $resultado10->num_rows;

                if($row_cnt10 == 9){

                    


                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta10=$row_usr10['id_ext1'];
                $consulta10 = "SELECT * FROM datos WHERE id_ext ='$id_consulta10'";
                $resultado_consulta10= $conn->query($consulta10);
                $row_consulta10=$resultado_consulta10->fetch_assoc();

                echo '<td>'.$row_consulta10['apellido'].'</td>';
                echo '<td>'.$row_consulta10['nombre'].'</td>';
                echo '<td>'.$row_consulta10['curp'].'</td>';
                echo '<td>'.$row_usr10['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr10['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (MÚSICA)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr11 = $resultado_usr11->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion11 = $row_usr11['id_ext1'];
                $query11 = "SELECT * FROM docs WHERE id_ext='$id_validacion11'";
                $resultado11= $conn->query($query11);
                $row11=$resultado11->fetch_assoc();
                $row_cnt11 = $resultado11->num_rows;

                if($row_cnt11 == 9){



                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta=$row_usr['id_ext1'];
                $consulta = "SELECT * FROM datos WHERE id_ext ='$id_consulta'";
                $resultado_consulta= $conn->query($consulta);
                $row_consulta=$resultado_consulta->fetch_assoc();

                echo '<td>'.$row_consulta['apellido'].'</td>';
                echo '<td>'.$row_consulta['nombre'].'</td>';
                echo '<td>'.$row_consulta['curp'].'</td>';
                echo '<td>'.$row_usr['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (TEATRO)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr12= $resultado_usr12->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion12 = $row_usr12['id_ext1'];
                $query12 = "SELECT * FROM docs WHERE id_ext='$id_validacion12'";
                $resultado12= $conn->query($query12);
                $row12=$resultado12->fetch_assoc();
                $row_cnt12 = $resultado12->num_rows;

                if($row_cnt12 == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta12=$row_usr12['id_ext1'];
                $consulta12 = "SELECT * FROM datos WHERE id_ext ='$id_consulta12'";
                $resultado_consulta12= $conn->query($consulta12);
                $row_consulta12=$resultado_consulta12->fetch_assoc();

                echo '<td>'.$row_consulta12['apellido'].'</td>';
                echo '<td>'.$row_consulta12['nombre'].'</td>';
                echo '<td>'.$row_consulta12['curp'].'</td>';
                echo '<td>'.$row_usr12['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr12['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES ESCÉNICAS (DANZA)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>
                  <th scope="col">Ganador</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr13 = $resultado_usr13->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion13 = $row_usr13['id_ext1'];
                $query13 = "SELECT * FROM docs WHERE id_ext='$id_validacion13'";
                $resultado13= $conn->query($query13);
                $row13=$resultado13->fetch_assoc();
                $row_cnt13 = $resultado13->num_rows;

                if($row_cnt13 == 9){

                    
                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta13=$row_usr13['id_ext1'];
                $consulta13 = "SELECT * FROM datos WHERE id_ext ='$id_consulta13'";
                $resultado_consulta13= $conn->query($consulta13);
                $row_consulta13=$resultado_consulta13->fetch_assoc();

                echo '<td>'.$row_consulta13['apellido'].'</td>';
                echo '<td>'.$row_consulta13['nombre'].'</td>';
                echo '<td>'.$row_consulta13['curp'].'</td>';
                echo '<td>'.$row_usr13['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr13['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES PLÁSTICAS, VISUALES Y POPULARES</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Calificación</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr14 = $resultado_usr14->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion14 = $row_usr14['id_ext1'];
                $query14= "SELECT * FROM docs WHERE id_ext='$id_validacion14'";
                $resultado14= $conn->query($query14);
                $row14=$resultado14->fetch_assoc();
                $row_cnt14 = $resultado14->num_rows;

                if($row_cnt14 == 9){

                   

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta14=$row_usr13['id_ext1'];
                $consulta14 = "SELECT * FROM datos WHERE id_ext ='$id_consulta14'";
                $resultado_consulta14= $conn->query($consulta14);
                $row_consulta14=$resultado_consulta14->fetch_assoc();

                echo '<td>'.$row_consulta14['apellido'].'</td>';
                echo '<td>'.$row_consulta14['nombre'].'</td>';
                echo '<td>'.$row_consulta14['curp'].'</td>';
                echo '<td>'.$row_usr['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr14['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTE URBANO</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr15 = $resultado_usr15->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion15 = $row_usr15['id_ext1'];
                $query15 = "SELECT * FROM docs WHERE id_ext='$id_validacion15'";
                $resultado15= $conn->query($query15);
                $row15=$resultado15->fetch_assoc();
                $row_cnt15 = $resultado15->num_rows;

                if($row_cnt15 == 9){

                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta15=$row_usr15['id_ext1'];
                $consulta15 = "SELECT * FROM datos WHERE id_ext ='$id_consulta15'";
                $resultado_consulta15= $conn->query($consulta15);
                $row_consulta15=$resultado_consulta15->fetch_assoc();

                echo '<td>'.$row_consulta15['apellido'].'</td>';
                echo '<td>'.$row_consulta15['nombre'].'</td>';
                echo '<td>'.$row_consulta15['curp'].'</td>';
                echo '<td>'.$row_usr15['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr15['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: CIENCIA Y TECNOLOGÍA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Calificaciones</th>

                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr16 = $resultado_usr16->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion16 = $row_usr16['id_ext1'];
                $query16 = "SELECT * FROM docs WHERE id_ext='$id_validacion16'";
                $resultado16= $conn->query($query16);
                $row16=$resultado16->fetch_assoc();
                $row_cnt16 = $resultado16->num_rows;

                if($row_cnt16 == 9){


                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';

                $id_consulta16=$row_usr16['id_ext1'];
                $consulta16 = "SELECT * FROM datos WHERE id_ext ='$id_consulta16'";
                $resultado_consulta16= $conn->query($consulta16);
                $row_consulta16=$resultado_consulta16->fetch_assoc();

                echo '<td>'.$row_consulta16['apellido'].'</td>';
                echo '<td>'.$row_consulta16['nombre'].'</td>';
                echo '<td>'.$row_consulta16['curp'].'</td>';
                echo '<td>'.$row_usr16['promedio'].'</td>';
                echo '<td><a href="docs_admin.php?id='.$row_usr16['id_ext1'].'&id_cat=1" class="h3"><i class="bi bi-card-checklist"></i></a></td>';
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>