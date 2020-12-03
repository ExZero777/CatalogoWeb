<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Usuario Creado</title>
  <link rel="shortcut icon" href="../img/jdlsa.jpg" />

   <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link href="form-validation.css" rel="stylesheet">  
</head>

<?php 
    require "../metodos.php";
?>

<body background="../img/gmb.jpg" style="background-size:cover";>
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
    
<?php
 require "../conexion.php";
 $sql = "insert into usuarios(
  nickname_usuario,nombre_usuario,apellido_usuario,dni_usuario,domicilio_usuario,email_usuario,contraseña_usuario,permiso_usuario)
  values" 
  . "('".$_POST['nickname_usuario'] 	. "'," 
  . "'" .$_POST['nombre_usuario'] 	. "',"
  . "'" .$_POST['apellido_usuario'] 	. "',"	
  . "'" .$_POST['dni_usuario'] 	. "',"	
  . "'" .$_POST['domicilio_usuario'] 	. "',"
  . "'" .$_POST['email_usuario'] 	. "',"	
  . "'" .$_POST['contraseña_usuario'] 	. "',"	
  . "'" .$_POST['permiso_usuario'] 	. "' "	
  . ")";
  

if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 ALIGN=center class='mb-4'>Datos Guardados Correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  echo    "<h4 ALIGN=center class='mb-4'>Datos Guardados Inorrectamente,Favor De Intentarlo Nuevamente</h4> </a>";
}

$mysqli->close();
		
?>

<div class="container-fluid text-white" ALIGN=center>

<!-- /#page-content-wrapper -->

</div>
  <!-- /#wrapper -->

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

  <footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1 text-dark">&copy; 2020 - JDL S.A</p>
    <ul class="list-inline ">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>-->
  </footer>
</div>


