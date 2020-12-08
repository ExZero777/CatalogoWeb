<!doctype html>
<html>
<title>Listados De Subcategorias</title>
  <?php
    require "../mlibs/header.php"
  ?>


<body background="../img/listados.jpg" style="background-size:cover";>


<?php 
    require "../conexion.php";

    $sql = "SELECT * from subcategorias order by id_subcategoria";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
      $subcategorias[] = $resultado;
    }
?>    

<?php
  require "../mlibs/bodyiscat.php";
?>

<?php
  require "../mlibs/script.php"
?>
</body>
</html>
