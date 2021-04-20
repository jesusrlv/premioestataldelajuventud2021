<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require('dashboard/prcd/conn.php');
    ?>
  

  <title>PREMIO ESTATAL DE LA JUVENTUD 2021</title>
  <link rel="icon" type="image/png" href="img/icon.ico"/>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

  <!-- script validate -->
  <script src="dashboard/prcd/validacion_pwd.js"></script>
  <script src="dashboard/prcd/validacion.js"></script>
  <link href="dashboard/css/CheckPassword.css" rel="stylesheet" />

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">


  <script type="text/javascript">
  $(document).ready(function() {	
      $('#username').on('blur', function() {
          $('#result-username').html('<img src="dashboard/img/loader.gif" />').fadeOut(1000);
  
          var username = $(this).val();		
          var dataString = 'username='+username;
  
          $.ajax({
              type: "POST",
              url: "verficacion.php",
              data: dataString,
              success: function(data) {
                  $('#result-username').fadeIn(1000).html(data);
              }
          });
      });              
  });    
  </script>
  <!-- script validate -->

  <!-- script visual -->
<script>
 function myFunction() {
  var x = document.getElementById("exampleInputPassword1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>
  <!-- script visual -->

</head>

<body class="text-center" style="background-image: url(img/fondo.jpg); background-repeat: no-repeat;background-attachment: fixed;  
background-size: cover;">



<!-- <form class="form-signin" action="dashboard.html" method="POST" name="envio"> -->
<form class="form-signin" action="dashboard/prcd/proceso_validacion.php" name="envio" method="POST">
  <img class="mb-4" src="img/logo.png" alt="" width="100%" >
  <h3>PREMIO ESTATAL DE LA JUVENTUD 2021</h3>
  <hr>
  <h1 class="h4 mb-3 font-weight-normal">Ingresar</h1>
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="usuario" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="pwd" required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="Submit" type="submit"><i class="fas fa-user-lock"></i> Acceder</button>
  
  <hr>
  <h1 class="h4 mb-3 font-weight-normal">Registro</h1>
  <!-- <button class="btn btn-lg btn-warning btn-block" name="Submit" type="submit"><i class="fas fa-user-plus"></i> Registrarse</button> -->
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> Registrarse</button>
  <hr>
  <p class="mt-5 mb-3 text-muted">&copy; 2021 | INJUVENTUD</p>
</form>


</body>

</html>

<!--MODAL-->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i> Registro de postulados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4><i class="bi bi-file-earmark-person"></i> Formulario</h4>

        <form action="dashboard/prcd/agregar_usr.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
            <!-- <small id="emailHelp" class="form-text text-muted">Se generará un usuario para ingresar a la plataforma</small> -->
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
            <small id="emailHelp" class="form-text text-muted">Correo de contacto</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">CURP</label>
            <!-- <input type="text" class="form-control" id="username" name="username" placeholder="Correo electrónico" required> -->
            <input type="text" class="form-control" id="username" name="username" placeholder="Introduce tu CURP..." onkeyup="javascript:this.value=this.value.toUpperCase();" onblur="validarInput(this);" required>
            <small class="form-text text-muted">Este será el usuario para acceder a la plataforma y se enviará un correo con tus datos.</small>
          
          <!-- div de usuario repetido -->
            <p><div id="result-username"></div></p>
          <!-- div de usuario repetido -->

          <!-- div para validar CURP -->
          <p><div id="result-username2"></div></p>
          
          <!-- div de dato edad -->
            <p><div class="result-dato alert alert-primary" role="alert" value="" hidden>Tu edad es: <span id="result-dato"></span></div></p>
          <!-- div de dato edad -->
          
          </div>

          

          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            <p><input type="checkbox" onclick="myFunction()"> Mostrar contraseña </p>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword2">Teclear nuevamente la contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="cla2" required>
          </div> -->

          <!-- mensaje del Js para confirmar -->
          <div id="strengthMessage"></div>

          
          
          <button type="submit" class="btn btn-primary" id="boton_submit"><i class="bi bi-person-plus-fill"></i> Registrar</button>
        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="bi bi-x-square-fill"></i> Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!--MODAL-->

