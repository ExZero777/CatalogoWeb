<!doctype html>
<html>
<title>Listados Por SubCategorias</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT * FROM subcategorias ORDER BY id_subcategoria";
	    $query = $mysqli->query($sql);
	    while($resultado = $query->fetch_assoc()) {
        $subcategorias[] = $resultado;
      }
  ?>    

  <?php
    require "../mlibs/bodyscat.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</html>