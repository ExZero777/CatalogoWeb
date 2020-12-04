<!doctype html>
<html>
<title>Listados Por SubCategorias</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/listados.jpg" style="background-size:cover";>

  <?php 
      require "../conexion.php";

      $sql = "SELECT s.id_subcategoria, s.nombre_subcategoria FROM subcategorias AS s,categorias AS c WHERE c.id_categoria=s.categoria_subcategoria ORDER BY s.id_subcategoria";
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