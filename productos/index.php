<!doctype html>
<html>
<title>Productos</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/productos.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT * from productos order by id_producto";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $productos[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodyp.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>