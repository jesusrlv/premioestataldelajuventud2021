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
    <title>Dashboard | Proveedores</title>

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
            <span>Requisitos</span>
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
          <h1 class="h1">SECCIÓN</h1>
          <p class="lead">Datos</p>
          <hr class="my-4">
          <!-- <p>Cargar documentos</p>
          <a class="btn btn-primary btn-lg" href="agregar_bitacora.php" role="button"> <i class="fas fa-file-pdf"></i> Subir a bitácora -></a> -->

          
        <!-- interno -->
        <div class="row">
                <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Datos de postulación</h4>
            <form action="prcd/proceso_seccion_1.php" class="needs-validation" method="POST">
                <div class="row">

                <div class="col-md-12 mb-3 validate-input" data-validate="Selecciona una temática">
                <label for="tematica">Temática</label>
                  <select name="tematica" id="tematica" class="form-control" onchange="myFunction()" required>
                      <option value="">Seleccionar...</option>
                      
                      <optgroup label="Por trayectoria">
                      <option value="1">Logro académico(12-19 años)</option>
                      <option value="2">Logro académico(20-29 años)</option>
                      <option value="3">Discapacidad e integración</option>
                      <option value="4">Ingenio emprendedor</option>
                      <option value="5">Responsabilidad social</option>
                      <option value="6">Mérito migrante</option>
                      <option value="7">Mérito campesino</option>
                      <option value="8"> Protección al medio ambiente</option>
                      <option value="9"> Cultura Cívica, Política y/o Democracia</option>
                      </optgroup>
                      <optgroup label="Talento joven">
                      <option value="10">Literatura</option>
                      <option value="11">Artes Escénicas (Música)</option>
                      <option value="12">Artes Escénicas (Teatro)</option>
                      <option value="13">Artes Escénicas (Danza)</option>
                      <option value="14">Artes Plásticas, Visuales y Populares</option>
                      <option value="15">Arte Urbano (Grafiti) </option>
                      <option value="16">Ciencia y tecnología</option>
                      </optgroup>
                      
                  </select>

                  <script>
                    var valor = document.getElementById("tematica").value;
                  </script>


                  <hr>	
					    </div>
                <div class="col-md-4 mb-3 validate-input" data-validate="Selecciona una temática">
                <label for="tematica">Edad</label>
                  <select name="edad" id="edad" class="form-control" required>
                      <option value="">Seleccionar...</option>
                      
                      <!-- <optgroup label="Por trayectoria"> -->
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                  
                  </select>
                
					    </div>
          
                <div class="col-md-4 mb-3">
                    <label for="firstName">Apellido(s)</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid first name is required.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastName">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div>
                <!-- <div class="col-md-6 mb-3">
                    <label for="lastName">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div> -->
                <div class="col-md-6 mb-3 validate-input" data-validate="Selecciona una temática">
                <label for="tematica">Municipio</label>
                  <select name="municipio" id="municipio" class="form-control" required>
                      <option value="">Seleccionar...</option>
                      
                      <optgroup label="Municipios">
                      <option value="1">Apozol</option>
                      <option value="2">Apulco</option>
                      <option value="3">Atolinga</option>
                      <option value="4">Benito Juárez</option>
                      <option value="5">Calera</option>
                      <option value="6">Cañitas de Felipe Pescador</option>
                      <option value="7">Concepción del Oro</option>
                      <option value="8">Cuauhtémoc</option>
                      <option value="9">Chalchihuites</option>
                      <option value="10">Fresnillo</option>
                      <option value="11">Trinidad García de la Cadena</option>
                      <option value="12">Genaro Codina</option>
                      <option value="13">General Enrique Estrada</option>
                      <option value="14">General Francisco R. Murguía</option>
                      <option value="15">El Plateado de Joaquín Amaro</option>
                      <option value="16">General Pánfilo Natera</option>
                      <option value="17">Guadalupe</option>
                      <option value="18">Huanusco</option>
                      <option value="19">Jalpa</option>
                      <option value="20">Jerez</option>
                      <option value="21">Jiménez del Teul</option>
                      <option value="22">Juan Aldama</option>
                      <option value="23">Juchipila</option>
                      <option value="24">Loreto</option>
                      <option value="25">Luis Moya</option>
                      <option value="26">Mazapil</option>
                      <option value="27">Melchor Ocampo</option>
                      <option value="28">Mezquital del Oro</option>
                      <option value="29">Miguel Auza</option>
                      <option value="30">Momax</option>
                      <option value="31">Monte Escobedo</option>
                      <option value="32">Morelos</option>
                      <option value="33">Moyahua de Estrada</option>
                      <option value="34">Nochistlán de Mejía</option>
                      <option value="35">Noria de Ángeles</option>
                      <option value="36">Ojocaliente</option>
                      <option value="37">Pánuco</option>
                      <option value="38">Pinos</option>
                      <option value="39">Río Grande</option>
                      <option value="40">Sain Alto</option>
                      <option value="41">El Salvador</option>
                      <option value="42">Sombrerete</option>
                      <option value="43">Susticacán</option>
                      <option value="44">Tabasco</option>
                      <option value="45">Tepechitlán</option>
                      <option value="46">Tepetongo</option>
                      <option value="47">Teúl de González Ortega</option>
                      <option value="48">Tlaltenango de Sánchez Román</option>
                      <option value="49">Valparaíso</option>
                      <option value="50">Vetagrande</option>
                      <option value="51">Villa de Cos</option>
                      <option value="52">Villa García</option>
                      <option value="53">Villa González Ortega</option>
                      <option value="54">Villa Hidalgo</option>
                      <option value="55">Villanueva</option>
                      <option value="56">Zacatecas</option>
                      <option value="57">Trancoso</option>
                      <option value="58">Santa María de la Paz</option>
                      
                      </optgroup>
                      
                  </select>
                  <hr>	
					    </div>
                <div class="col-md-6 mb-3 validate-input" data-validate="Selecciona una temática">
                <label for="tematica">Grado escolar</label>
                  <select name="grado" id="grado" class="form-control" required>
                      <option value="">Seleccionar...</option>
                      
                      <optgroup label="Escolaridad">
                      <option value="1">Primaria</option>
                      <option value="2">Secundaria</option>
                      <option value="3">Preparatoria</option>
                      <option value="4">Universidad</option>
                      <option value="5">Maestría</option>
                      <option value="6">Doctorado</option>
                      <option value="7">Otro</option>
                      
                      </optgroup>
                      
                  </select>
                  <hr>	
					    </div>

                

                </div>

                
                <hr class="mb-4">

                <!-- div de usuario repetido -->
                <p><div id="result-username"></div></p>
                <!-- div de usuario repetido -->

                <!-- div de RFC validez -->
                <p><div id="result-rfc"></div></p>
                <!-- div de u RFC validez -->

                
                <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Terminar Datos <i class="bi bi-skip-forward-fill"></i></button> -->
                <button type="button" class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Terminar Datos <i class="bi bi-skip-forward-fill"></i>
                </button>
                <a type="button" class="btn btn-danger btn-lg btn-block" href="dashboard.php"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
            
            <!-- Modal -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center text-danger" id="exampleModalLabel"><strong><i class="bi bi-exclamation-circle-fill"></i> ¡ADVERTENCIA!</strong></h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                  </div>
                  <div class="modal-body">
                    <p class="h4">Has seleccionado la categoría de <strong><output type="text" id="valor" size="20"></strong>.</p> <p class="h4">Una vez guardado este proceso no podrás cambiar de categoría.</p>
                  </div>
                  <script>
                    function myFunction() {
                      var mylist = document.getElementById("tematica");
                      document.getElementById("valor").value = mylist.options[mylist.selectedIndex].text;
                    }
                    </script>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Continuar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal --> 

            </form>
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


<script language="JavaScript">

function ValidaRfc(rfcStr) {
	var strCorrecta;
	strCorrecta = rfcStr;	
	if (rfcStr.length == 12){
	var valid = '^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}else{
	var valid = '^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}
	var validRfc=new RegExp(valid);
	var matchArray=strCorrecta.match(validRfc);
	if (matchArray==null) {
		// alert('Cadena incorrectas');
    // $('#result-rfc')
    document.getElementById('result-rfc').innerHTML='<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena RFC incorrecta.</div><style>#boton_submit{display:none;}</style>';

		return false;
	}
	else
	{
		// alert('Cadena correcta:' + strCorrecta);
    document.getElementById('result-rfc').innerHTML='<div class="alert alert-success"><strong><i class="bi bi-info-circle-fill"></i> CORRECTO. </strong> Cadena RFC correcta.</div>';
		return true;
	}
	
}

function validarInput(input) {
	var curp = input.value.toUpperCase(),
    	resultado = document.getElementById("result-username"),
        valido = "No válido";
        
    if (curpValida(curp)) {
    	valido = "Válido";
        // resultado.classList.add("ok");
        resultado.innerHTML ='<div class="alert alert-success"><strong><i class="bi bi-info-circle-fill"></i> CORRECTO. </strong> Cadena CURP correcta.</div>';
    } else {
        resultado.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
    }
        
    // resultado.innerHTML = '<div class="alert alert-danger"><strong><i class="bi bi-exclamation-triangle-fill"></i> ERROR. </strong> Cadena CURP incorrecta.</div><style>#boton_submit{display:none;}</style>';
}

function curpValida(curp) {
	var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
    	validado = curp.match(re);
	
    if (!validado)  //Coincide con el formato general?
    	return false;
    
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if(lngDigito == 10)
            return 0;
        return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1])) 
    	return false;
        
	return true; //Validado
}

</script>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

https://startbootstrap.com/themes/admin-dashboard


Para validación de CURP
https://jsfiddle.net/marianom/rddbnhcc/3/
 -->
