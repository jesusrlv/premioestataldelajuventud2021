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
    <link href="css/bootstrap.css" rel="stylesheet">

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
      
        
       
        <a class="btn btn-outline-secondary" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
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
            <span>Requisitos</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="#">
               
              <i class="fas fa-file-alt"></i> Formato RCB-1
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               
              <i class="fas fa-file-alt"></i> SAT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               
              <i class="fas fa-file-alt"></i> FINANZAS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
               
              <i class="fas fa-file-alt"></i> Cédula proveedores
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

      <h5 class="text-secondary" style="margin-top:-27px"> <?php
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
          <h1 class="h1">BIENVENIDO AL SISTEMA DE POSTULACIÓN</h1>
          <p class="lead"><i class="bi bi-award"></i> PREMIO ESTATAL DE LA JUVENTUD 2021 | INJUVENTUD</p>
          <hr class="my-4">

          <!-- Donut chart -->
              <i class="fa fa-bar-chart-o"></i> <h3 class="box-title">Avance de carga de archivos</h3>

               
             
            
              <div id="donut-chart"></div>
           
            <!-- /.box-body-->
          <!-- /.box -->
       
     
   
    <!-- /.content -->
          <!-- <p>Cargar documentos</p>
          <a class="btn btn-primary btn-lg" href="agregar_bitacora.php" role="button"> <i class="fas fa-file-pdf"></i> Subir a bitácora -></a> -->

          
        <!-- interno -->


        <!-- consulta de validación -->
        
        <?php
        include('prcd/qwery_validacion_dashboard.php');
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-6">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-credit-card-2-front-fill"></i> DATOS PERSONALES</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Agregar datos del postulante</p>
                
                <?php
                  if($a == 0){
                    echo '<a href="seccion1.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($a > 0){
                    echo '<a href="" ></a>';
                  }
                  
                ?>
                
                <a href="editar_seccion1.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>
                <hr>
                <p class="card-text h4 text-center">Estatus</p>

                <?php
                  if($a == 0){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 2rem; "></i> Sin datos personales</p></div>';
                  }
                  elseif($a==1){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 2rem;"></i> En revisión</p></div>';
                  }
                  if($a == 2){
                    echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 2rem; color: cornflowerblue;"></i> Datos personales completos</p></div>';
                  }


                ?>

              </div>
            </div>
          </div>
          
          

          

          <div class="col mb-6">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-file-earmark-plus-fill"></i> DOCUMENTOS</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Agregar documentos de postulación <b>(<?php printf("Se cargaron %d documentos.\n", $row_cnt);?>)</b></p>
                
                <?php
                  if($x < 9){
                    echo '<a href="seccion4.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($x >= 9){
                    echo '<a href="" ></a>';
                  }
                  
                ?>
                
                
                
                
                
                <a href="#" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>
                <hr>
                <p class="card-text h4 text-center">Estatus</p>
                
                <?php
                if($x==0){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 2rem; "></i> Sin documentgos</p></div>';
                }
                elseif($x > 0 AND $x <= 8){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 2em;"></i> Expediente incompleto</p></div>';
                }
                if($x > 8){
                echo '<div class="alert alert-light" role="alert"><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 2rem; color: cornflowerblue;"></i> Expediente completo</p></div>';

                }
                ?>

              </div>
            </div>
          </div>

          
        </div>
      </div> <!-- container -->
      
      <hr>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-1">
          <div class="col mb-12">
            <div class="card text-white bg-primary mb-12" style="width: 100%; ">
              <!-- <div class="card-header">Tabla 1</div> -->
              <div class="card-body"><br>
                <h1 class="card-title"><i class="bi bi-exclamation-circle"></i> VALIDACIÓN DE EXPEDIENTE</h1>
                <p class="card-text">La siguiente validación se realiza por parte del personal del Instituto de la Juventud para validar el expediente, el cual es el siguiente:</p>

                <p class="card-text h4 text-center">Estatus</p>
                <p class="card-text h4 text-center" style="aligment-item:center;"><div class="alert alert-primary text-center" role="alert"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i> <i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i> <i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></div></p>
                <!-- <p><a href="trimestre1.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p> -->
              </div>
            </div>
          </div>
          </div>
          </div>

      <hr>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-1">
          <div class="col mb-12">
            <div class="card text-white bg-primary mb-12" style="width: 100%; ">
              <!-- <div class="card-header">Tabla 1</div> -->
              <div class="card-body"><br>
                <h1 class="card-title"><i class="bi bi-exclamation-circle"></i> DICTAMEN</h1>
                <p class="card-text">El siguiente dictamen para pertenecer por medio de Comité Calificador del Premio Estatal de la Juventud 2021 es el siguiente:</p>

                <p class="card-text h4 text-center">Estatus</p>
                <p class="card-text h4 text-center" style="aligment-item:center;"><div class="alert alert-primary text-center" role="alert"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i> <i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i> <i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></div></p>
                <!-- <p><a href="trimestre1.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p> -->
              </div>
            </div>
          </div>
          </div>
          </div>
        <!-- interno -->


        </div>
      </div>

      <!-- card -->
      
      <!-- card -->

      

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

<?php
 $v1 = $row_cnt;
 echo "Subidos ".$v1;
    $v9 = 9;
    $v2 = $v9 - $v1;
    
    echo " Penientes ".$v2;
?>
 <script>
  $(function () {
    
     /* LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
      [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
      [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART -------------------------------------------
     * -----------
     */
      var v1 = '<?php echo $v1; ?>'
      var v2 = '<?php echo $v2; ?>'
      
    var donutData = [
      { label: 'Subido', data: v1, color: '#1A8F5E' },
      { label: 'Pendientes', data: v2, color: '#FFBA59' }
//      { label: 'Series4', data: 50, color: '#00c0ef' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>