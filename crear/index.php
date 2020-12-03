<!doctype html>
<html>

<head>
  <title>Crear Usuario</title>
  <link rel="shortcut icon" href="../img/jdlsa2.jpg" />

   <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link href="form-validation.css" rel="stylesheet">  
</head>

<?php 
    require "../metodos.php";
?>

<body background="../img/crear.jpg" style="background-size:cover";>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->

<div class="bg-black border-right" id="sidebar-wrapper">
  
  <div class="list-group list-group-flush " ALIGN=center>
    <a href="../" class="list-group-item list-group-item-action bg-dark text-white " >Volver</a>
    
  </div>
</div>
<!-- /#Sidebar -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
    <button class="btn btn-primary bg-danger border-dark" id="menu-toggle">Ver / Ocultar</button>

    

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  

  <div class="col-md-12 order-md-1" ALIGN=center>
  <h2 class="mb-4 text-white">Alta De Usuarios</h2>
  <form class="needs-validation" novalidate action="grabar.php" method="post"> 
	  
<?php 
   require "../conexion.php";

  $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }
   
  $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }

?>

<DIV ALIGN=center>
       
          <div class="col-md-2 mb-4 text-white">
            <label for="nickname_usuario">NickName</label>
            <input type="text" class="form-control" name="nickname_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El NickName Del Usuario
            </div>
          </div>

          <div class="col-md-2 mb-4 text-white">
            <label for="nombre_usuario">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Usuario
            </div>
          </div>
     
        
          <div class="col-md-2 mb-4 text-white">
            <label for="apellido_usuario">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Usuario
            </div>
          </div>
         
          <div class="col-md-2 mb-4 text-white">
            <label for="dni_usuario">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Usuario
            </div>
          </div>

          <div class="col-md-2 mb-4 text-white">
            <label for="domicilio_usuario">Domicilio</label>
            <input type="text" class="form-control" name="domicilio_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Domicilio Del Usuario
            </div>
          </div>

          <div class="col-md-2 mb-4 text-white">
            <label for="email_usuario">Email</label>
            <input type="text" class="form-control" name="email_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Usuario
            </div>
          </div>

          <div class="col-md-2 mb-4 text-white">
          <label for="contraseña_usuario">Contraseña</label>
            <input type="text" class="form-control" name="contraseña_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Contraseña Del Usuario
            </div>
          </div>

          <div class="col-md-2 mb-4">
            <input type="hidden" class="form-control" name="permiso_usuario" placeholder="" value="2" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Permiso Del Usuario
            </div>
          </div>

    </div>
     <hr class="mb-4">
     <DIV ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-md-2 mb-4" type="submit">Guardar</button>
      </form>
     </div>
    </div>

</div>


 <!-- Bootstrap/JavaScript Cores-->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle JavaScript -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</div>
    <div class="col-sm-3">
      <h4 class="mb-1"> </h4>
</div>    
 
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
