<!doctype html>
<html>
<title>Creacion De Comentarios</title>
<?php 
    require "../mlibs/header.php"
?>

<body background="../img/comentarios.jpg" style="background-size:cover";>



	  
<?php 
   require "../conexion.php";

  

  $sql = "SELECT * from comentarios order by id_comentario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }

    $sql = "SELECT * from productos order by id_producto";
    $query = $mysqli->query($sql);
    while($resultado = $query->fetch_assoc()) {
          $productos[] = $resultado;
      }


?>


<?php
    require "../mlibs/bodylcn.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>
</body>
</html>
