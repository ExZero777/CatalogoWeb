<!doctype html>
<html>
<title>Descripcion Del Productos</title>
  <?php
    require "../mlibs/header.php"
  ?>


<body background="../img/productos.jpg" style="background-size:cover";>


<?php 
    require "../conexion.php";

    $sql = "SELECT * FROM comentarios WHERE (activo_comentario=1) AND (producto_comentario=" . $_GET['id_producto'].  ") ORDER BY fecha_comentario";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
      $comentarios[] = $resultado;
    }
?>    

<?php
  require "../mlibs/bodylpc.php";
?>

<?php
  require "../mlibs/script.php"
?>
</body>
</html>
