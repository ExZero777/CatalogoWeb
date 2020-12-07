<!doctype html>
<html>
<title>Listados De Usuarios</title>
  <?php
    require "../mlibs/header.php"
  ?>

  <body background="../img/indexu.jpg" style="background-size:cover";>

 

<?php 
   require "../conexion.php";

    $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }
  
?>    
       
  <?php
    require "../mlibs/bodyiu.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</body>
</html>
