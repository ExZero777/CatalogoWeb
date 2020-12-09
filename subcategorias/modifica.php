<!doctype html>
<html>
<title>Modificacion De Usuarios</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"     
?>

<body background="../img/categorias.jpg" style="background-size:cover";>


<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from subcategorias where id_subcategoria = " . $_GET['id_subcategoria'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $subcategorias[] = $resultado;
     }  
     
	echo "<input type='hidden' name='id_marca' value=" .$_GET['id_marca'] .">"; 
?>  
	  <?php
    require "../mlibs/bodycm.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
