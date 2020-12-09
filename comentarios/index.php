<!doctype html>
<html>
<title>Listados De Marcas</title>
  <?php
    require "../mlibs/header.php"
  ?>


<body background="../img/comentarios.jpg" style="background-size:cover";>


<?php 
    require "../conexion.php";

    $sql = "SELECT * from comentarios order by id_comentario";
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
