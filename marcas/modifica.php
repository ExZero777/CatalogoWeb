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
   $sql = "SELECT * from marcas where id_marca = " . $_GET['id_marca'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $marcas[] = $resultado;
     }  
     
	echo "<input type='hidden' name='id_marca' value=" .$_GET['id_marca'] .">"; 
?>  
	  <?php
    require "../mlibs/bodymm.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
