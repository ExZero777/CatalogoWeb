<!doctype html>
<html>
<title>Modificacion De Usuarios</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"     
?>

<body background="../img/usuarios.jpg" style="background-size:cover";>


<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from usuarios where id_usuario = " . $_GET['id_usuario'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $usuarios[] = $resultado;
     }  
     
     
     $sql = "SELECT * from permisos order by id_permiso";
	$query = $mysqli->query($sql);
	while($resultado = $query->fetch_assoc()) {
        $permisos[] = $resultado;
    }  
	
	echo "<input type='hidden' name='id_usuario' value=" .$_GET['id_usuario'] .">"; 
?>  
	  <?php
    require "../mlibs/bodyum.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
