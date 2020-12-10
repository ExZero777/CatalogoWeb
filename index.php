<!DOCTYPE html>
<html lang="en">
<title>Catalogo Web</title>
<link rel="shortcut icon" href="./img/jdlsa2.jpg" />

<?php
   include "./metodos.php";
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body background="./img/catalogo.jpg" style="background-size:cover";>

  <div class="d-flex" id="wrapper">

    
    <div class="bg-black border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush " ALIGN=center>
        <a href="./ingreso/" class="list-group-item list-group-item-action bg-dark text-white">Ingresar</a>
        <a href="./crear/" class="list-group-item list-group-item-action bg-dark text-white">Crear Usuario</a>
      </div>
    </div>
    

    
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
        <button class="btn btn-primary bg-danger border-dark" id="menu-toggle">Ver / Ocultar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      
<?php 
   require "./conexion.php";

   $sql = "SELECT p.nombre_producto, p.foto_producto, p.destacado_producto, p.activo_producto FROM productos AS p WHERE p.destacado_producto =1 AND p.activo_producto=1 ORDER BY RAND () LIMIT 6";
	 $query = $mysqli->query($sql);
	 while($resultado = $query->fetch_assoc()) {
      $productos[] = $resultado;   
   }
?>

<?php 				
    $long = count($productos);
      	for($i=0; $i< $long; $i++){ 
?>

        
    <div class="container-fluid text-dark">
      <h2 class="mt-4">PRODUCTO DESTACADO!!!</h2>
        <div class="text-left"><h2>
          
         <img  src= <?php echo $productos[$i]['foto_producto'];   ?> width="300" height="300" title="Producto Destacado 1" />

          <label for="Producto Destacado 1"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2>
       </div>
      </div>
      <?php  } ?> 

      </div>
  
  
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
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
   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>
