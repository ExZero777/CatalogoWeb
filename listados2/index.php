<!doctype html>
<html>
<title>Listados De Categorias</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT * from categorias WHERE activo_categoria=1 order by id_categoria";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $categorias[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodylcat2.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>