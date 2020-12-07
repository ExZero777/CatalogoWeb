<!doctype html>
<html>
<title>Listados De Marcas</title>
  <?php
    require "../mlibs/header.php"
  ?>


<body background="../img/marcas.jpg" style="background-size:cover";>


<?php 
    require "../conexion.php";

    $sql = "SELECT * from marcas order by id_marca";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
      $marcas[] = $resultado;
    }
?>    

<?php
  require "../mlibs/bodyim.php";
?>

<?php
  require "../mlibs/script.php"
?>
</body>
</html>
