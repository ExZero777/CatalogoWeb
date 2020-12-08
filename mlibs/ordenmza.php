<!doctype html>
<html>
<title>Listados Por Marcas</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";
 
      $sql = "SELECT * FROM marcas WHERE activo_marca=1 ORDER BY nombre_marca DESC";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $marcas[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodylm.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>