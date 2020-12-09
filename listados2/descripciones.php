<!doctype html>
<html>
<title>Descripcion Del Productos</title>
  <?php
    require "../mlibs/header.php"
  ?>


<body background="../img/productos.jpg" style="background-size:cover";>


<?php 
    require "../conexion.php";

    $sql = "SELECT * FROM productos WHERE id_producto=" . $_GET['id_producto'];
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
      $productos[] = $resultado;
    }
?>    

<?php
  require "../mlibs/bodylpd2.php";
?>

<?php
  require "../mlibs/script.php"
?>
</body>
</html>
