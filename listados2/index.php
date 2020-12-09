<!doctype html>
<html>
<title>Listados De Productos</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT * from productos order by id_producto";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $productos[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/body2.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>