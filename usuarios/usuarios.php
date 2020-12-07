<!doctype html>
<html>
<title>Listados De Usuarios</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"
?>

<body background="../img/nuevou.jpg" style="background-size:cover";>


	  
<?php 
   require "../conexion.php";

  

    $sql = "SELECT * from usuarios order by id_usuario";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }
   
    $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }

?>


<?php
    require "../mlibs/bodyu.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>
</body>
</html>
