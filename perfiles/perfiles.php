<!doctype html>
<html>
<title>Alta De Perfiles</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"
?>

<body background="../img/nuevou.jpg" style="background-size:cover";>


	  
<?php 
   require "../conexion.php";

   
    $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }

?>


<?php
    require "../mlibs/bodyper.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>
</body>
</html>
