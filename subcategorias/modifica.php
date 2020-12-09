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

     $sql = "SELECT * from categorias order by id_categoria";
     $query = $mysqli->query($sql);
     while($resultado = $query->fetch_assoc()) {
       $categorias[] = $resultado;
     }  
     
	echo "<input type='hidden' name='id_subcategoria' value=" .$_GET['id_subcategoria'] .">"; 
?>  
	  <?php
    require "../mlibs/bodysm.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
