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

include('prcd/conn.php');
include('prcd/qwery.php');

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
    <title>Dashboard | Premio Estatal de la Juventud 2021</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">


    <!-- Scripts -->
    <script src="css/form-valdation.js"></script>


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
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-light text-dark">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-white" href="#">
    <!-- <img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h5 class="text-center text-dark display-7" style="margin-left:3px;"><b>INJUVENTUD</b></h5>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a href="" class="text-left">Inicio ></a> -->
  <!-- <input class="form-control form-control-dark w-10" type="text" placeholder="Search" aria-label="Search" style="width:30%"> -->
  
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
        <a class="btn btn-outline-secondary btn-sm" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/logo.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span><i class="bi bi-camera-reels-fill"></i> Tutoriales</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="#">
               
            <i class="bi bi-play-circle-fill"></i> Subir Datos Personales
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               
            <i class="bi bi-play-circle-fill"></i> Subir documentos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               
            <i class="bi bi-play-circle-fill"></i> Observaciones
            </a>
          </li>
         
          
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="h1">DASHBOARD</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h4 class="text-primary" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h4>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">SECCIÓN </h1>
          <p class="lead">Documentos</p>
          <hr class="my-4">
          
            <!-- <div class="alert alert-secondary" role="alert">
                <a href=""><i class="bi bi-file-binary-fill"></i> Descargar Formato RCB-1</a>
            </div> -->

        <!-- ROW -->
        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="bi bi-folder-fill"></i> Lista de archivos para visualizar</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover table-striped table-bordered align-middle">
                <thead class="text-center align-middle">
                  <tr class="bg-dark text-light border-0">
                    <th class="border border-secondary">#</th>
                    <th class="border border-secondary">Nombre</th>
                    <th class="border border-secondary">Archivo</th>
                    <th class="border border-secondary">Descripción del archivo</th>
                  </tr>
                </thead>

                <tbody class="align-middle">
                <tr>
                  <td class="align-middle text-center">1</td>
                  <td class="align-middle text-center">Carta Propuesta</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Emitida en el presente año en papel membretado por alguna institución, organismo, dependencia, agrupación, o bien proponerse a sí mismo. En ella se enumerarán los méritos del candidato(a) y deberá ser dirigida a él o la titular del Instituto de la Juventud del Estado de Zacatecas, precisando la modalidad y categoría en la que solicita su registro. Formato libre.</td>
                </tr>
                
                <tr>
                  <td class="align-middle text-center">2</td>
                  <td class="align-middle text-center">Currículum vitae</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row2['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Documento actualizado, incluyendo datos generales (nombre completo, dirección, teléfono(s), correo electrónico, ocupación).</td>
                </tr>

                <tr>
                  <td class="align-middle text-center">3</td>
                  <td class="align-middle text-center">Semblanza de trayectoria</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row3['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td class="align-middle">Documento con un máximo de una cuartilla.</td>
                </tr>
                <tr>
                  <td class="align-middle text-center">4</td>
                  <td class="align-middle text-center">Acta de nacimiento</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row4['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                 
                  <td>Documento digitalizado.</td>
                </tr>
                <tr>
                  <td class="align-middle text-center">5</td>
                  <td class="align-middle text-center">Credencial de elector</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row5['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Documento digitalizado.</td>
                </tr>

                <tr>
                  <td class="align-middle text-center">6</td>
                  <td class="align-middle text-center">Comprobante de domicilio</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row6['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Documento escaneado (PDF) no mayor a 3 meses.</td>
                </tr>
                
                <tr>
                  <td class="align-middle text-center">7</td>
                  <td class="align-middle text-center">CURP</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row7['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Documento escaneado (PDF).</td>
                </tr>
                
                <tr>
                  <td class="align-middle text-center">8</td>
                  <td class="align-middle text-center">Material bibliográfico</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row8['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Copia o duplicado de materiales bibliográficos, audiovisuales, gráficos y otros que demuestren los motivos por los cuales se considera que él o la candidata (a) puede merecer el premio.</td>
                </tr>               
                <tr>
                  <td class="align-middle text-center">9</td>
                  <td class="align-middle text-center">Video</td>
                  <td class="text-center h1 text-primary  align-middle"><a href="<?php echo $row9['ruta']?>"><i class="bi bi-cloud-arrow-down-fill"></i></a></td>
                  <td>Deberán presentar una cápsula de 30 segundos como máximo, en digital, donde se explique brevemente por qué se considera acreedor del Premio Estatal de la Juventud. Se subirá por medio de Yyoutube o un video de no más de 70 MB..</td>
                </tr>               
                </tbody>
                
              </table>
              
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cargar archivo</h4>
              </div>
              <div class="modal-body">
                <p><label for="exampleInputFile">Seleeciona el documento</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">No tiene que exceder los 60Mb</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
            
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- ROW -->


        
        
            

                
                <hr class="mb-4">
                <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Terminar Sección 4 <i class="bi bi-skip-forward-fill"></i></button> -->
                <a type="button" class="btn btn-primary btn-lg btn-block" href="dashboard.php"><i class="bi bi-backspace-fill"></i> Regresar</a>
            </form>
            </div>


        </div>
        <!-- interno -->


        </div>
      </div>

      <!-- card -->
      
      <!-- card -->

      

      </div>

      <!-- ROW -->



      <!-- ROW -->
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


<!-- aquiiiiiii -->
<!-- CODIGO -->

