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
              <h3 class="box-title"><i class="bi bi-folder-plus"></i> Lista de archivos a editar</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding align-middle">
            <table class="table table-hover table-striped table-bordered align-middle">
                <thead>
                <tr class="bg-dark text-light border-0">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Cargar archivo</th>
                  <!-- <th>Status</th> -->
                  <th>Descripción del archivo</th>
                  </tr>
                </thead>
                <tr>
                  <td>1</td>
                  <td>Carta Propuesta</td>
                 
                 <script type="text/javascript">
                
                     function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file1", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Cargado " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
    _("file1").style.display='none';
    _("progressBar").style.display='none';
}

function errorHandler(event) {
  _("status").innerHTML = "Fallo en la subida";
}

function abortHandler(event) {
  _("status").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form" enctype="multipart/form-data" method="post">
                    <input type="file" name="file1" id="file1" onchange="uploadFile()" accept="application/pdf"><br>
                    <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                    <h4 id="status"></h4>
                    <p id="loaded_n_total"></p>
  
  
  <?php
//           if (!$row) {
            
//             echo '<input type="file" name="file1" id="file1" onchange="uploadFile()" accept="application/pdf"><br>
//   <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
//   <h4 id="status"></h4>
//   <p id="loaded_n_total"></p>';
//         }
//         else{
//             echo '<div class="alert alert-secondary h5" role="alert">
//             <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//           </div>';
//         }
    
    ?>

</form></td>
                             
                  <?php           
            // if(empty($variable)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?>
                  
                  <td>Emitida en el presente año en papel membretado por alguna institución, organismo, dependencia, agrupación, o bien proponerse a sí mismo. En ella se enumerarán los méritos del candidato(a) y deberá ser dirigida a él o la titular del Instituto de la Juventud del Estado de Zacatecas, precisando la modalidad y categoría en la que solicita su registro. Formato libre.</td>
                </tr>
                
                <tr>
                  <td>2</td>
                  <td>Currículum vitae</td>
                  

                  <script type="text/javascript">
                
                     function _(el2) {
  return document.getElementById(el2);
}

function uploadFile2() {
  var file = _("file2").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file2", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler2, false);
  ajax.addEventListener("load", completeHandler2, false);
  ajax.addEventListener("error", errorHandler2, false);
  ajax.addEventListener("abort", abortHandler2, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo2.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler2(event) {
  _("loaded_n_total2").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar2").value = Math.round(percent);
  _("status2").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler2(event) {
  _("status2").innerHTML = event.target.responseText;
  _("progressBar2").value = 0; //wil clear progress bar after successful upload
    _("file2").style.display='none';
    _("progressBar2").style.display='none';
}

function errorHandler2(event) {
  _("status2").innerHTML = "Fallo en la subida";
}

function abortHandler2(event) {
  _("status2").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                  <td><form id="upload_form2" enctype="multipart/form-data" method="post">
                    <input type="file" name="file2" id="file2" onchange="uploadFile2()" accept="application/pdf"><br>
                    <progress id="progressBar2" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status2"></h3>
                    <p id="loaded_n_total2"></p>
                  
                  <?php

// Carga de archivos 2
//           if (!$row2) {
            
//             echo '<input type="file" name="file2" id="file2" onchange="uploadFile2()" accept="application/pdf"><br>
//   <progress id="progressBar2" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status2"></h3>
//   <p id="loaded_n_total2"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>
                  

</form></td>
                 
                  <?php           
            // if(empty($variable2)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
    
                  
                                              
<!--                  <td><span class="label label-warning">Pending</span></td>-->
                  
                  <td>Documento actualizado, incluyendo datos generales (nombre completo, dirección, teléfono(s), correo electrónico, ocupación).</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Semblanza de trayectoria</td>
                  <script type="text/javascript">
                
                     function _(el3) {
  return document.getElementById(el3);
}

function uploadFile3() {
  var file = _("file3").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file3", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler3, false);
  ajax.addEventListener("load", completeHandler3, false);
  ajax.addEventListener("error", errorHandler3, false);
  ajax.addEventListener("abort", abortHandler3, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo3.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler3(event) {
  _("loaded_n_total3").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar3").value = Math.round(percent);
  _("status3").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler3(event) {
  _("status3").innerHTML = event.target.responseText;
  _("progressBar3").value = 0; //wil clear progress bar after successful upload
    _("file3").style.display='none';
    _("progressBar3").style.display='none';
}

function errorHandler3(event) {
  _("status3").innerHTML = "Fallo en la subida";
}

function abortHandler3(event) {
  _("status3").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form3" enctype="multipart/form-data" method="post">
                    <input type="file" name="file3" id="file3" onchange="uploadFile3()" accept="application/pdf"><br>
                    <progress id="progressBar3" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status3"></h3>
                    <p id="loaded_n_total3"></p>
                  
        <?php
             
//         if (!$row3) {            
//             echo '<input type="file" name="file3" id="file3" onchange="uploadFile3()" accept="application/pdf"><br>
//   <progress id="progressBar3" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status3"></h3>
//   <p id="loaded_n_total3"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>

</form></td>

                  <?php           
            // if(empty($variable3)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?>
                     
                  <td>Documento con un máximo de una cuartilla.</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Acta de nacimiento</td>
                  <script type="text/javascript">
                
                     function _(el4) {
  return document.getElementById(el4);
}

function uploadFile4() {
  var file = _("file4").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file4", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler4, false);
  ajax.addEventListener("load", completeHandler4, false);
  ajax.addEventListener("error", errorHandler4, false);
  ajax.addEventListener("abort", abortHandler4, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo4.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler4(event) {
  _("loaded_n_total4").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar4").value = Math.round(percent);
  _("status4").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler4(event) {
  _("status4").innerHTML = event.target.responseText;
  _("progressBar4").value = 0; //wil clear progress bar after successful upload
   _("file4").style.display='none';
    _("progressBar4").style.display='none';
}

function errorHandler4(event) {
  _("status4").innerHTML = "Fallo en la subida";
}

function abortHandler4(event) {
  _("status4").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form4" enctype="multipart/form-data" method="post">
                    <input type="file" name="file4" id="file4" onchange="uploadFile4()" accept="application/pdf"><br>
                    <progress id="progressBar4" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status4"></h3>
                    <p id="loaded_n_total4"></p>
                  
<?php

        
//      if (!$row4) {
            
//             echo '<input type="file" name="file4" id="file4" onchange="uploadFile4()" accept="application/pdf"><br>
//   <progress id="progressBar4" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status4"></h3>
//   <p id="loaded_n_total4"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>

</form></td>
                  <?php           
            // if(empty($variable4)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
                  <td>Documento digitalizado.</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Credencial de elector</td>
                  <script type="text/javascript">
                
                     function _(el5) {
  return document.getElementById(el5);
}

function uploadFile5() {
  var file = _("file5").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file5", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler5, false);
  ajax.addEventListener("load", completeHandler5, false);
  ajax.addEventListener("error", errorHandler5, false);
  ajax.addEventListener("abort", abortHandler5, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo5.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler5(event) {
  _("loaded_n_total5").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar5").value = Math.round(percent);
  _("status5").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler5(event) {
  _("status5").innerHTML = event.target.responseText;
  _("progressBar5").value = 0; //wil clear progress bar after successful upload
    _("file5").style.display='none';
    _("progressBar5").style.display='none';
}

function errorHandler5(event) {
  _("status5").innerHTML = "Fallo en la subida";
}

function abortHandler5(event) {
  _("status5").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form5" enctype="multipart/form-data" method="post">
                    <input type="file" name="file5" id="file5" onchange="uploadFile5()" accept="application/pdf"><br>
                    <progress id="progressBar5" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status5"></h3>
                    <p id="loaded_n_total5"></p>
<?php           
        
//         if (!$row5) {
            
//             echo '<input type="file" name="file5" id="file5" onchange="uploadFile5()" accept="application/pdf"><br>
//   <progress id="progressBar5" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status5"></h3>
//   <p id="loaded_n_total5"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>
 
</form></td>
                  
                  <?php           
            // if(empty($variable5)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
                    
                  <td>Documento digitalizado.</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Comprobante de domicilio</td>
                  <script type="text/javascript">
                
                     function _(el6) {
  return document.getElementById(el6);
}

function uploadFile6() {
  var file = _("file6").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file6", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler6, false);
  ajax.addEventListener("load", completeHandler6, false);
  ajax.addEventListener("error", errorHandler6, false);
  ajax.addEventListener("abort", abortHandler6, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo6.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler6(event) {
  _("loaded_n_total6").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar6").value = Math.round(percent);
  _("status6").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler6(event) {
  _("status6").innerHTML = event.target.responseText;
  _("progressBar6").value = 0; //wil clear progress bar after successful upload
    _("file6").style.display='none';
    _("progressBar6").style.display='none';
}

function errorHandler6(event) {
  _("status6").innerHTML = "Fallo en la subida";
}

function abortHandler6(event) {
  _("status6").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form6" enctype="multipart/form-data" method="post">
                    <input type="file" name="file6" id="file6" onchange="uploadFile6()" accept="application/pdf"><br>
                    <progress id="progressBar6" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status6"></h3>
                    <p id="loaded_n_total6"></p>
<?php
       
        
//        if (!$row6) {            
//             echo '<input type="file" name="file6" id="file6" onchange="uploadFile6()" accept="application/pdf"><br>
//   <progress id="progressBar6" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status6"></h3>
//   <p id="loaded_n_total6"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>

</form></td>
                  
                  <?php           
            // if(empty($variable6)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
                    
                  <td>Documento escaneado (PDF) no mayor a 3 meses.</td>
                </tr>
                
                
                <tr>
                  <td>7</td>
                  <td>CURP</td>
                  <script type="text/javascript">
                
                     function _(el7) {
  return document.getElementById(el7);
}

function uploadFile7() {
  var file = _("file7").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file7", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler7, false);
  ajax.addEventListener("load", completeHandler7, false);
  ajax.addEventListener("error", errorHandler7, false);
  ajax.addEventListener("abort", abortHandler7, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo7.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler7(event) {
  _("loaded_n_total7").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar7").value = Math.round(percent);
  _("status7").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler7(event) {
  _("status7").innerHTML = event.target.responseText;
  _("progressBar7").value = 0; //wil clear progress bar after successful upload
    _("file7").style.display='none';
    _("progressBar7").style.display='none';
}

function errorHandler7(event) {
  _("status7").innerHTML = "Fallo en la subida";
}

function abortHandler7(event) {
  _("status7").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form7" enctype="multipart/form-data" method="post">
                    <input type="file" name="file7" id="file7" onchange="uploadFile7()" accept="application/pdf"><br>
                    <progress id="progressBar7" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status7"></h3>
                    <p id="loaded_n_total7"></p>
<?php     
        
//         if (!$row7) {
            
//             echo '<input type="file" name="file7" id="file7" onchange="uploadFile7()" accept="application/pdf"><br>
//   <progress id="progressBar7" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status7"></h3>
//   <p id="loaded_n_total7"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>
 
 
</form></td>
                  <?php           
            // if(empty($variable7)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
                  <td>Documento escaneado (PDF).</td>
                </tr>
                
                <tr>
                  <td>8</td>
                  <td>Material bibliográfico</td>
                  <script type="text/javascript">
                
                     function _(el8) {
  return document.getElementById(el8);
}

function uploadFile8() {
  var file = _("file8").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file8", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler8, false);
  ajax.addEventListener("load", completeHandler8, false);
  ajax.addEventListener("error", errorHandler8, false);
  ajax.addEventListener("abort", abortHandler8, false);
  ajax.open("POST", "prcd/editar_docs/editar_archivo8.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler8(event) {
  _("loaded_n_total8").innerHTML = "Subido " + event.loaded + " bytes de " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar8").value = Math.round(percent);
  _("status8").innerHTML = Math.round(percent) + "% subido... espere un momento";
}

function completeHandler8(event) {
  _("status8").innerHTML = event.target.responseText;
  _("progressBar8").value = 0; //wil clear progress bar after successful upload
    _("file8").style.display='none';
    _("progressBar8").style.display='none';
}

function errorHandler8(event) {
  _("status8").innerHTML = "Fallo en la subida";
}

function abortHandler8(event) {
  _("status8").innerHTML = "Fallo en la subida";
}
                    
                </script>
                 
                    <td><form id="upload_form8" enctype="multipart/form-data" method="post">
                    <input type="file" name="file8" id="file8" onchange="uploadFile8()" accept="application/pdf"><br>
                    <progress id="progressBar8" value="0" max="100" style="width:300px;"></progress>
                    <h3 id="status8"></h3>
                    <p id="loaded_n_total8"></p>
<?php

        
//           if (!$row8) {            
//             echo '<input type="file" name="file8" id="file8" onchange="uploadFile8()" accept="application/pdf"><br>
//   <progress id="progressBar8" value="0" max="100" style="width:300px;"></progress>
//   <h3 id="status8"></h3>
//   <p id="loaded_n_total8"></p>';
//         }
//         else{
//           echo '<div class="alert alert-secondary h5" role="alert">
//           <i class="bi bi-file-earmark-check-fill"></i> Archivo cargado en tu sistema
//         </div>';
//         }
    
    ?>
 
 
</form>
</td>
                  <?php           
            // if(empty($variable8)){
            // echo '<td><span class="label label-warning">No Cargado</span></td>';
            // }
            // else{
            // echo '<td><span class="label label-success">Cargado</span></td>';
            // }
    
                    ?> 
                  <td>Copia o duplicado de materiales bibliográficos, audiovisuales, gráficos y otros que demuestren los motivos por los cuales se considera que él o la candidata (a) puede merecer el premio.</td>
                </tr>               
                <tr>
                  <td>9</td>
                  <td>Video</td>
                  
                  
                 
                  <td><div class="input-group mb-3">
                  <button class="btn btn-primary" id="btnguardar" width="100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-cloud-arrow-up-fill"></i> Subir video</button></div></td>
                  
                  <!-- modal -->

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-film"></i> Video</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <p>Se debe cargar la liga de YouTube de tu video para poder continuar con el proceso de postulación.</p>
                            <p><strong>NOTA:</strong> Se recomienda terminar con la carga de los otros documentos y finalizar con el proceso del video.</p>
                            <form action="prcd/editar_docs/editar_archivo9.php" method="POST">
                            <p>
                            <div class="input-group flex-nowrap">
                              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-play-btn-fill"></i></span>
                              <input type="text" name="file9" class="form-control" placeholder="Link de YouTube" aria-label="Link de YouTube" aria-describedby="addon-wrapping" required>
                          </div>
                          </p>
                          <p class="text-right"><button type="submit" class="btn btn-primary"><i class="bi bi-cloud-arrow-up-fill"></i> Guardar</button> <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button></p>
                            
                            </form></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- modal -->

                  <td>Deberán presentar una cápsula de 30 segundos como máximo, en digital, donde se explique brevemente por qué se considera acreedor del Premio Estatal de la Juventud. Se subirá por medio de Yyoutube o un video de no más de 70 MB..</td>
                </tr>               
                
                
              </table>
              
<!-- BOTÓN OCULTO
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Calificar</button>
              </div>
-->
              
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-dialog-centered">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script src="css/dashboard.js"></script></body>
</html>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

https://startbootstrap.com/themes/admin-dashboard
 -->


<!-- aquiiiiiii -->
<!-- CODIGO -->

