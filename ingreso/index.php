<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Ingreso A Catalogo Web</title>
    <link rel="shortcut icon" href="../img/jdlsa2.jpg" />

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link href="form-validation.css" rel="stylesheet">  

  </head>
  
  <body background="../img/ingreso.jpg"  style="background-size:cover";>
  
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
      <h4 class="mb-4 text-white">Ingreso</h4>

<?php 
   require "../conexion.php";

  $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }   
?>

<DIV ALIGN=center>

<div class="container" >
    <div class="d-flex justify-content-center text-white">
      <form ALIGN=center class="form-horizontal" action="../login/" method="POST">
        <div class="form-group">
          
          <div class="col-sm-14">
            <input type="text" class="form-control" name="email_usuario" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-14">
            <input type="password" class="form-control" name="contraseña_usuario" placeholder="Contraseña" required>
            <span class="fa fa-fw fa-eye password-icon show-password"></span>
          </div>
        </div>
      
        <div class="col-md-6">
           <input type="hidden" class="form-control" name="permiso_usuario" required>
           <?php 
				     $long = count($usuarios);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
				     echo " value=" .$usuarios[$i]['id_usuario'] .">";				
				     echo "</option>";
             }
				   ?>
        </div>
  

       

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-14">
        <button type="submit" class="btn btn-success btn-lg btn-block">Ingresar</button>
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
  


<footer class="my-5 pt-5 text-muted text-center text-small"></a>
    <p class="mb-1 text-white">&copy; 2020 - JDL S.A</p>
   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</body>
</html>
