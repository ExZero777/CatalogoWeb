<!doctype html>
<html>
<title>Modificacion De Productos</title>
<?php 
    
    require "../mlibs/header.php"     
?>


<body background="../img/productos.jpg" style="background-size:cover";>


<?php 
   
  require "../conexion.php";
  $sql = "SELECT * from productos where id_producto = " . $_GET['id_producto'];
  $query = $mysqli->query($sql);
  while($resultado = $query->fetch_assoc()) {
         $productos[] = $resultado;
    }  
     
  $sql = "SELECT * from categorias order by id_categoria";
  $query = $mysqli->query($sql);
  while($resultado = $query->fetch_assoc()) {
          $categorias[] = $resultado;
      }   

  $sql = "SELECT * from subcategorias order by id_subcategoria";
  $query = $mysqli->query($sql);
  while($resultado = $query->fetch_assoc()) {
          $subcategorias[] = $resultado;
      }      
     
   $sql = "SELECT * from marcas order by id_marca";
	 $query = $mysqli->query($sql);
	 while($resultado = $query->fetch_assoc()) {
        $marcas[] = $resultado;
    }  

   $sql = "SELECT * from usuarios order by id_usuario";
	 $query = $mysqli->query($sql);
	 while($resultado = $query->fetch_assoc()) {
        $usuarios[] = $resultado;
    }  

	echo "<input type='hidden' name='id_producto' value=" .$_GET['id_producto'] .">"; 
?>  
	  <?php
    require "../mlibs/bodypm.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
