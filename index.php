<!DOCTYPE html>
<html lang="en">
<title>Catalogo Web</title>
<?php
    require "metodos.php"
     
?>

<body background="./img/catalogo.jpg" style="background-size:100% 100%";>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-black border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush " ALIGN=center>
        <a href="./ingreso/" class="list-group-item list-group-item-action bg-dark text-white">Ingresar</a>
        <a href="./crear/" class="list-group-item list-group-item-action bg-dark text-white">Crear Usuario</a>
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
   require "./conexion.php";

   $sql = "SELECT p.nombre_producto, p.foto_producto, p.destacado_producto FROM productos AS p ORDER BY RAND () LIMIT 6";
	 $query = $mysqli->query($sql);
	 while($resultado = $query->fetch_assoc()) {
         if($resultado['destacado_producto']==1){
          $productos[] = $resultado;
         }
   }
?>

<?php 				
      	$long = count($productos);
      	for($i=0; $i< $long; $i++){ 
      ?>

        
      <div class="container-fluid text-dark">
      <h2 class="mt-4">DESTACADOS!!!</h2>
        <div class="text-left"><h2>
	       	<img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 1" />
          <label for="Producto Destacado 1"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <div class="text-center"><h2>
          <img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 2" />
          <label for="Producto Destacado 2"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <div class="text-right"><h2>
          <img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 3" />
          <label for="Producto Destacado 3"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <div class="text-right"><h2>
          <img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 4" />
          <label for="Producto Destacado 4"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <div class="text-center"><h2>
          <img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 5" />
          <label for="Producto Destacado 5"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <div class="text-left"><h2>
          <img border="0" src=<?php echo "'".$productos[$i]['foto_producto']."'" ?> width="250" height="250" title="Producto Destacado 6" />
          <label for="Producto Destacado 6"><h6><?php echo "'".$productos[$i]['nombre_producto']."'" ?></h6></label>
        </h2></div>
        <?php  } ?>
        <p>Configuración de datos para control e incorporación de información en la app móvil.</p>
      </div>
    </div>
      
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
   <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad de Datos</a></li>
      <li class="list-inline-item"><a href="#">Términos de Uso</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>
</div>
</body>
</html>