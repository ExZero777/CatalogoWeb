<html>
<title>Grabar Comentario</title>
<?php 
    require "../metodos.php";
?>
<?php 
   require "../mlibs/header.php"
?>
 


  <body background="../img/comentarios.jpg" style="background-size:cover";>

    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
 
    <p class="lead"><h4><strong>Ingreso de Usuarios y Servicios / Profesiones para la App</strong></h4></p>
  </div>
      
	  
<?php
 require "../conexion.php";
 $sql = "insert into comentarios(
  producto_comentario,fecha_comentario,comentario_comentario,ranqueo_comentario,activo_comentario)
  values" 
  . "('". $_GET['id_producto']. "'," 
  . "'".$_POST['fecha_comentario'] 	. "'," 
  . "'" .$_POST['comentario_comentario'] 	. "',"
  . "'" .$_POST['ranqueo_comentario'] 	. "',"		
  . "'" .$_POST['activo_comentario'] 	. "' "	
  . ")";
  


if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='javascript:history.go(-1)'> <div class='col-md-12 order-md-1'>";
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


