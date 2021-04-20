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
// include('../dashboard/prcd/qwery_admin.php');

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

    <!-- Gráfico -->


<!-- FLOT CHARTS -->
<script src="/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
    <!-- <script src="prcd/grafico.js"></script> -->

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
        body{background-color:gray;
        
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-light">
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
        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active text-light" href="dashboard.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          

          <li class="nav-item">
            <a class="nav-link text-light" href="busqueda.php">
               
            <i class="bi bi-search"></i> Búsqueda de usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="revision_calificaciones.php">
               
            <i class="bi bi-card-checklist"></i> Calificaciones
            </a>
          </li>
         
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary bg-gradient" style=" height:100%;">
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
          <h1 class="h1">BIENVENIDO AL SISTEMA ADMINISTRADOR</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <hr class="my-4">

        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1">

        <?php 
            $id_consulta = $_REQUEST['id'];

            $sql_qwery = "SELECT * FROM calificacion WHERE id_ext1 = '$id_consulta'";
            $resultado_consulta= $conn->query($sql_qwery);
            // $row=$resultado_consulta->fetch_assoc();
        ?>

        <div class="col mb-12">
        <p class="h5">CATEGORIA: <?php 
            $id_busqueda = $_REQUEST['id_cat'];
            if($id_busqueda==1){
                echo 'LOGRO ACADÉMICO (12 - 19 AÑOS)';
            }
            elseif($id_busqueda==2){
                echo 'LOGRO ACADÉMICO (20 - 29 AÑOS)';
            }
            elseif($id_busqueda==3){
                echo 'DISCAPACIDAD E INTEGRACIÓN';
            }
            elseif($id_busqueda==4){
                echo 'INGENIO EMPRENDEDOR';
            }
            elseif($id_busqueda==5){
                echo 'RESPONSABILIDAD SOCIAL';
            }
            elseif($id_busqueda==6){
                echo 'MÉRITO MIGRANTE';
            }
            elseif($id_busqueda==7){
                echo 'MÉRITO CAMPESINO';
            }
            elseif($id_busqueda==8){
                echo 'PROTECCIÓN AL MEDIO AMBIENTE';
            }
            elseif($id_busqueda==9){
                echo 'CULTURA CÍVICA, POLÍTICA Y DEMOCRACIA';
            }
            elseif($id_busqueda==10){
                echo 'LITERATURA';
            }
            elseif($id_busqueda==11){
                echo 'ARTES ESCÉNICAS (MÚSICA)';
            }
            elseif($id_busqueda==12){
                echo 'ARTES ESCÉNICAS (TEATRO)';
            }
            elseif($id_busqueda==13){
                echo 'ARTES ESCÉNICAS (DANZA)';
            }
            elseif($id_busqueda==14){
                echo 'ARTES PLÁSTICAS, VISUALES Y POPULARES';
            }
            elseif($id_busqueda==15){
                echo 'ARTE URBANO';
            }
            elseif($id_busqueda==16){
                echo 'CIENCIA Y TECNOLOGÍA';
            }
        
        ?></p>


        <?php
          
          $sql_usr = "SELECT * FROM datos WHERE id_ext = '$id_consulta'";
          $resultado_usr = $conn->query($sql_usr);
          $row_usr = $resultado_usr->fetch_assoc();
        ?>
        <p><strong>NOMBRE:</strong> <?php echo $row_usr['apellido'].', '; echo $row_usr['nombre']; ?></p>

            <table class="table table-hover text-center table-striped ">
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jurado</th>
                <th scope="col">Currículum<br>Vitae</th>
                <th scope="col">Semblanza<br>de trayectoria</th>
                <th scope="col">Material<br>bibliográfico</th>
                <th scope="col">Video</th>
                <th scope="col">Calificación</th>
              </tr>
            </thead>
            <tbody>

            <?php
            
            $y=0;
          //  while($resultado_qwery = $resultado_consulta->fetch_assoc()){
           while($row=$resultado_consulta->fetch_assoc()){
             $y++;
             echo '<tr>';
             echo '<td>'.$y.'</td>';
                $id_revisor = $row['id_ext2'];
                $sql_revisor = "SELECT * FROM usr WHERE id = '$id_revisor' AND perfil = 3";
                $resultado_revisor= $conn->query($sql_revisor);
                $row_revisor=$resultado_revisor->fetch_assoc();
              
            echo '<td>'.$row_revisor['usuario'].'</td>';
             
             echo '<td>'.$row['doc1'].'</td>';
             echo '<td>'.$row['doc2'].'</td>';
             echo '<td>'.$row['doc3'].'</td>';
             echo '<td>'.$row['doc4'].'</td>';
             
             $doc1 = $row['doc1'];
             $doc2 = $row['doc2'];
             $doc3 = $row['doc3'];
             $doc4 = $row['doc4'];
             $promedio = ($doc1 + $doc2 + $doc3 + $doc4)/4;

             echo '<td>'.$promedio.'</td>';
             
             echo '</tr>';
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

