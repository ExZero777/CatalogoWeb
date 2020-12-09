<!doctype html>
<html>
<title>Listados Por Comentarios</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/comentarios.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";
 
      $sql = "SELECT * FROM comentarios WHERE activo_comentario=1 ORDER BY fecha_comentario DESC";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $comentarios[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodyic.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>