<!doctype html>
<html>
<title>Listados De Usuarios</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"
?>

<body background="../img/productos.jpg" style="background-size:cover";>


	  
<?php 
   require "../conexion.php";

   $sql = "SELECT * from productos  order by id_producto " ;
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
?>

<?php
    require "../mlibs/bodypn.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>
</body>
</html>
