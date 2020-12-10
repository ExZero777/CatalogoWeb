<html>
<title>Listados De Productos</title>
<?php 
    require "../metodos.php";
?>
<?php 
   require "../mlibs/header.php"
?>
 


  <body background="../img/productos.jpg" style="background-size:cover";>

    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
 
    <p class="lead"><h4><strong>Ingreso de Usuarios y Servicios / Profesiones para la App</strong></h4></p>
  </div>
      
	  
<?php
 require "../conexion.php";

 $ruta ="../img/subs/".$_FILES['foto_producto']['name'];
 move_uploaded_file($_FILES["foto_producto"]["tmp_name"],$ruta);
 $ruta = "../CatalogoWeb/img/subs/".$_FILES['foto_producto']['name'];

 $sql = "insert into productos(
  nombre_producto,descripcion_producto,marca_producto,modelo_producto,foto_producto,ranqueo_producto,usuario_producto,categoria_producto,subcategoria_producto,destacado_producto,activo_producto)
  values" 
  . "('".$_POST['nombre_producto'] 	. "'," 
  . "'".$_POST['descripcion_producto'] 	. "'," 
  . "'" .$_POST['marca_producto'] 	. "',"
  . "'" .$_POST['modelo_producto'] 	. "',"	
  . "'" .$ruta 	. "',"	
  . "'" .$_POST['ranqueo_producto'] 	. "',"
  . "'" .$_POST['usuario_producto'] 	. "',"	
  . "'" .$_POST['categoria_producto'] 	. "',"	
  . "'" .$_POST['subcategoria_producto'] 	. "',"	
  . "'" .$_POST['destacado_producto'] 	. "',"	
  . "'" .$_POST['activo_producto'] 	. "' "	
  . ")";
  


if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../productos/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Datos guardados correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
		
?>
 

  <?php
    require "../mlibs/script.php"
  ?>

  </body>
</div>


