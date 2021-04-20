<?php
session_start();

// if (isset($_SESSION['usr'])) {
//     if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==3){
        // header('Location: javascript: history.go(-1)');
    // }
    // else{
        // header('Location:prcd/sort.php');
    // }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
// } else {
    // En caso contrario redirigimos el visitante a otra página

    // echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    // header('Location: prcd/sort.php');
    // die();
// }

include('../dashboard/prcd/conn.php');
include('../dashboard/prcd/qwery_admin.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard | PEJ 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="../dashboard/css/bootstrap.css" rel="stylesheet">

    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        body{background-color:gray;}
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-info text-light">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center" href="#">
    <!-- <img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h5 class="text-center display-7 text-light" style="margin-left:3px;"><b>PEJ 2021</b></h5>
    <!-- <h5 class="text-center display-7 text-light" style="margin-left:3px;"><b>INJUVENTUD</b></h5> -->
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a href="" class="text-left">Inicio ></a> -->
  <!-- <input class="form-control form-control-dark w-10" type="text" placeholder="Search" aria-label="Search" style="width:30%"> -->
  
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
    <a class="btn btn-outline-light btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>      
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="https://juventud.zacatecas.gob.mx/wp-content/uploads/2021/04/Instituto-de-la-juventud-blanco.png" width="81%" class="" alt="" loading="lazy">  
                   <!-- <img src="../img/logo.png" width="35%" class="" alt="" loading="lazy">   -->
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="text-light">
          Bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
        <ul class="nav flex-column align-items-center">
 
           <li class="nav-item">
            <a class="nav-link active text-light" href="index.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard<br><strong>Notario Público</strong> <span class="sr-only">(current)</span>
            </a>
          </li>

          <li><a href="lista_ganadores.php" class="nav-link active text-light">
          <i class="bi bi-list-stars"></i> Lista ganadores</a></li>
          <hr style="color: dimgrey;">
          
          
         
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary bg-info" style="background-color:; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="h1 text-light">DASHBOARD</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h5 class="text-light" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1 text-center">BIENVENIDO AL SISTEMA NOTARIO</h1>
          <p class="lead text-center">PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <p class="h1 text-center"><i class="bi bi-award"></i></p>

          <p class="lead text-center"><strong>PERFIL DE NOTARIO PÚBLICO</strong></p>
          <hr class="my-4">

        
        <?php
        // include('prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">
          
        <div class="col mb-12">
        
        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (12-19)</p>

            <table class="table table-hover text-center table-striped" id="mi-tabla">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion = $row_usr['id_ext'];
                $query = "SELECT * FROM docs WHERE id_ext='$id_validacion'";
                $resultado= $conn->query($query);
                $row=$resultado->fetch_assoc();
                $row_cnt = $resultado->num_rows;

                if($row_cnt == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion' ORDER BY doc1 ASC, doc2 ASC,doc3 ASC,doc4 ASC";
                    $resultado_calificacion= $conn->query($query_calificacion);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion = $resultado_calificacion->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr['apellido'].'</td>';
                echo '<td>'.$row_usr['nombre'].'</td>';
                echo '<td>'.$row_usr['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: LOGRO ACADÉMICO (20-29)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr2 = $resultado_usr2->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion2 = $row_usr2['id_ext'];
                $query2 = "SELECT * FROM docs WHERE id_ext='$id_validacion2'";
                $resultado2= $conn->query($query2);
                $row2=$resultado2->fetch_assoc();
                $row_cnt2 = $resultado2->num_rows;

                if($row_cnt2 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion2 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion2'";
                    $resultado_calificacion2= $conn->query($query_calificacion2);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion2 = $resultado_calificacion2->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion2['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion2['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion2['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion2['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr2['apellido'].'</td>';
                echo '<td>'.$row_usr2['nombre'].'</td>';
                echo '<td>'.$row_usr2['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr2['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr3 = $resultado_usr3->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion3 = $row_usr3['id_ext'];
                $query3 = "SELECT * FROM docs WHERE id_ext='$id_validacion3'";
                $resultado3= $conn->query($query3);
                $row3=$resultado3->fetch_assoc();
                $row_cnt3 = $resultado3->num_rows;

                if($row_cnt3 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion3 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion3'";
                    $resultado_calificacion3= $conn->query($query_calificacion3);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion3 = $resultado_calificacion3->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion3['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion3['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion3['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion3['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr3['apellido'].'</td>';
                echo '<td>'.$row_usr3['nombre'].'</td>';
                echo '<td>'.$row_usr3['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr3['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr = $resultado_usr->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion4 = $row_usr4['id_ext'];
                $query4 = "SELECT * FROM docs WHERE id_ext='$id_validacion4'";
                $resultado4= $conn->query($query4);
                $row4=$resultado4->fetch_assoc();
                $row_cnt4 = $resultado4->num_rows;

                if($row_cnt4 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion4 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion4'";
                    $resultado_calificacion4= $conn->query($query_calificacion4);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion4 = $resultado_calificacion4->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion4['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion4['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion4['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion4['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr4['apellido'].'</td>';
                echo '<td>'.$row_usr4['nombre'].'</td>';
                echo '<td>'.$row_usr4['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr4['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr5 = $resultado_usr5->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion5 = $row_usr5['id_ext'];
                $query5 = "SELECT * FROM docs WHERE id_ext='$id_validacion5'";
                $resultado5= $conn->query($query5);
                $row5=$resultado5->fetch_assoc();
                $row_cnt5 = $resultado5->num_rows;

                if($row_cnt5 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion5 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion5'";
                    $resultado_calificacion5= $conn->query($query_calificacion5);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion5 = $resultado_calificacion5->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion5['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion5['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion5['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion5['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr5['apellido'].'</td>';
                echo '<td>'.$row_usr5['nombre'].'</td>';
                echo '<td>'.$row_usr5['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr5['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr6 = $resultado_usr6->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion6 = $row_usr6['id_ext'];
                $query6 = "SELECT * FROM docs WHERE id_ext='$id_validacion6'";
                $resultado6= $conn->query($query6);
                $row6=$resultado6->fetch_assoc();
                $row_cnt6 = $resultado6->num_rows;

                if($row_cnt6 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion6 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion6'";
                    $resultado_calificacion6= $conn->query($query_calificacion6);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion = $resultado_calificacion->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion6['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion6['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion6['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion6['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr6['apellido'].'</td>';
                echo '<td>'.$row_usr6['nombre'].'</td>';
                echo '<td>'.$row_usr6['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr6['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr7 = $resultado_usr7->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion7 = $row_usr7['id_ext'];
                $query7 = "SELECT * FROM docs WHERE id_ext='$id_validacion7'";
                $resultado7= $conn->query($query7);
                $row7=$resultado7->fetch_assoc();
                $row_cnt7 = $resultado7->num_rows;

                if($row_cnt7 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion7 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion7'";
                    $resultado_calificacion7= $conn->query($query_calificacion7);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion7 = $resultado_calificacion7->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion7['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion7['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion7['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion7['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr7['apellido'].'</td>';
                echo '<td>'.$row_usr7['nombre'].'</td>';
                echo '<td>'.$row_usr7['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr7['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr8 = $resultado_usr8->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion8 = $row_usr8['id_ext'];
                $query8 = "SELECT * FROM docs WHERE id_ext='$id_validacion8'";
                $resultado8= $conn->query($query8);
                $row8=$resultado8->fetch_assoc();
                $row_cnt8 = $resultado8->num_rows;

                if($row_cnt8 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion8 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion8'";
                    $resultado_calificacion8= $conn->query($query_calificacion8);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion8 = $resultado_calificacion8->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion8['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion8['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion8['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion8['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr8['apellido'].'</td>';
                echo '<td>'.$row_usr8['nombre'].'</td>';
                echo '<td>'.$row_usr8['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr8['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr9 = $resultado_usr9->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion9 = $row_usr9['id_ext'];
                $query9 = "SELECT * FROM docs WHERE id_ext='$id_validacion9'";
                $resultado9= $conn->query($query9);
                $row9=$resultado9->fetch_assoc();
                $row_cnt9 = $resultado9->num_rows;

                if($row_cnt9 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion9 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion9'";
                    $resultado_calificacion9= $conn->query($query_calificacion9);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion9 = $resultado_calificacion9->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion9['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion9['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion9['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion9['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr9['apellido'].'</td>';
                echo '<td>'.$row_usr9['nombre'].'</td>';
                echo '<td>'.$row_usr9['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr9['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr10 = $resultado_usr10->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion10 = $row_usr10['id_ext'];
                $query10 = "SELECT * FROM docs WHERE id_ext='$id_validacion10'";
                $resultado10= $conn->query($query10);
                $row10=$resultado10->fetch_assoc();
                $row_cnt10 = $resultado10->num_rows;

                if($row_cnt10 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion10 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion10'";
                    $resultado_calificacion10= $conn->query($query_calificacion10);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion10 = $resultado_calificacion10->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion10['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion10['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion10['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion10['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr10['apellido'].'</td>';
                echo '<td>'.$row_usr10['nombre'].'</td>';
                echo '<td>'.$row_usr10['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr10['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr11 = $resultado_usr11->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion11 = $row_usr11['id_ext'];
                $query11 = "SELECT * FROM docs WHERE id_ext='$id_validacion11'";
                $resultado11= $conn->query($query11);
                $row11=$resultado11->fetch_assoc();
                $row_cnt11 = $resultado11->num_rows;

                if($row_cnt11 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion11 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion11'";
                    $resultado_calificacion11= $conn->query($query_calificacion11);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion11 = $resultado_calificacion11->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion11['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion11['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion11['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion11['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr11['apellido'].'</td>';
                echo '<td>'.$row_usr11['nombre'].'</td>';
                echo '<td>'.$row_usr11['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr11['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr12 = $resultado_usr12->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion12 = $row_usr12['id_ext'];
                $query12 = "SELECT * FROM docs WHERE id_ext='$id_validacion12'";
                $resultado12= $conn->query($query12);
                $row12=$resultado12->fetch_assoc();
                $row_cnt12 = $resultado12->num_rows;

                if($row_cnt12 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion12 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion12'";
                    $resultado_calificacion12= $conn->query($query_calificacion12);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion12 = $resultado_calificacion12->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion12['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion12['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion12['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion12['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr12['apellido'].'</td>';
                echo '<td>'.$row_usr12['nombre'].'</td>';
                echo '<td>'.$row_usr12['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr12['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA:ARTES ESCÉNICAS (DANZA)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr13 = $resultado_usr13->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion13 = $row_usr13['id_ext'];
                $query13 = "SELECT * FROM docs WHERE id_ext='$id_validacion13'";
                $resultado13= $conn->query($query13);
                $row13=$resultado13->fetch_assoc();
                $row_cnt13 = $resultado13->num_rows;

                if($row_cnt13== 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion13 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion13'";
                    $resultado_calificacion13= $conn->query($query_calificacion13);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion13 = $resultado_calificacion13->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion13['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion13['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion13['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion13['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr13['apellido'].'</td>';
                echo '<td>'.$row_usr13['nombre'].'</td>';
                echo '<td>'.$row_usr13['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr13['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTES PLÁTICAS, VISUALES Y POPULARES</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr14 = $resultado_usr14->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion14 = $row_usr14['id_ext'];
                $query14 = "SELECT * FROM docs WHERE id_ext='$id_validacion14'";
                $resultado14= $conn->query($query14);
                $row14=$resultado14->fetch_assoc();
                $row_cnt14 = $resultado14->num_rows;

                if($row_cnt14 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion14 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion14'";
                    $resultado_calificacion14= $conn->query($query_calificacion14);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion14 = $resultado_calificacion14->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion14['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion14['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion14['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion14['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr14['apellido'].'</td>';
                echo '<td>'.$row_usr14['nombre'].'</td>';
                echo '<td>'.$row_usr14['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr14['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>

        <p class=" h4">CATEGORIA: ARTE URBANO (GRAFITI)</p>

            <table class="table table-hover text-center table-striped ">

            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">CURP</th>
                  <th scope="col">Promedio</th>
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr15 = $resultado_usr15->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion15 = $row_usr15['id_ext'];
                $query15 = "SELECT * FROM docs WHERE id_ext='$id_validacion15'";
                $resultado15= $conn->query($query15);
                $row15=$resultado15->fetch_assoc();
                $row_cnt15 = $resultado15->num_rows;

                if($row_cnt15 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion15 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion15'";
                    $resultado_calificacion15= $conn->query($query_calificacion15);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion15 = $resultado_calificacion15->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion15['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion15['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion15['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion15['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr15['apellido'].'</td>';
                echo '<td>'.$row_usr15['nombre'].'</td>';
                echo '<td>'.$row_usr15['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr15['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
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
                  <th scope="col">Ganador</th>
                </tr>
            </thead>
            <tbody>
           
              <?php
               $x=0;
              while($row_usr16 = $resultado_usr16->fetch_assoc()){

                // validacion de 9 docs
                $id_validacion16 = $row_usr16['id_ext'];
                $query16 = "SELECT * FROM docs WHERE id_ext='$id_validacion16'";
                $resultado16= $conn->query($query16);
                $row16=$resultado16->fetch_assoc();
                $row_cnt16 = $resultado16->num_rows;

                if($row_cnt16 == 9){

                    // calificaciones
                    // $id_calificacion = $row_usr['id_ext'];
                    $query_calificacion16 = "SELECT * FROM calificacion WHERE id_ext1='$id_validacion16'";
                    $resultado_calificacion16= $conn->query($query_calificacion16);

                        $num = 0;
                        $doc1 = 0;
                        $doc2 = 0;
                        $doc3 = 0;
                        $doc4 = 0;
                        $prom1 = 0;
                        $prom2 = 0;
                        $prom3 = 0;
                        $prom4 = 0;

                        $promedio_final = 0;

                    while($row_calificacion16 = $resultado_calificacion16->fetch_assoc()){
                        $num++;
                        $doc1 = ($doc1) + ($row_calificacion16['doc1']);
                        $doc2 = ($doc2) + ($row_calificacion16['doc2']);
                        $doc3 = ($doc3) + ($row_calificacion16['doc3']);
                        $doc4 = ($doc4) + ($row_calificacion16['doc4']);

                        $prom1 = $doc1 / $num;
                        $prom2 = $doc2 / $num;
                        $prom3 = $doc3 / $num;
                        $prom4 = $doc4 / $num;

                        $promedio_final = ($prom1 + $prom2 + $prom3 + $prom4) / 4;
                    }




                $x++;
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.$row_usr16['apellido'].'</td>';
                echo '<td>'.$row_usr16['nombre'].'</td>';
                echo '<td>'.$row_usr16['curp'].'</td>';
                echo '<td>'.$promedio_final.'</td>';
                if ($row_usr16['medal']==1){
                  echo '<td class="text-warning h5"><i class="bi bi-star-fill"></i></td>';
                }
                else{
                  echo '<td class="text-dark"><i class="bi bi-star"></i></td>';
                }
                echo '</tr>';
                
                } 
              }
              ?>
            </tbody>
                <hr>
            </table>
        
        
</div>

      </div> <!-- container -->
      
      <hr>
      

      

      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

https://startbootstrap.com/themes/admin-dashboard
 -->

