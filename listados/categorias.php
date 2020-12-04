<!doctype html>
<html>
<title>Listados Por Categorias</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT * from categorias order by id_categoria";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $categorias[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodycat.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>