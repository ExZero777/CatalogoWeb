<!doctype html>
<html>
<title>Listados Por Categorias</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";
 
      $sql = "SELECT * FROM productos WHERE activo_producto=1 ORDER BY ranqueo_producto DESC";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $productos[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodylp2.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>