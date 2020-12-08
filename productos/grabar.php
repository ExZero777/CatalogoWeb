<html>
<title>Listados De Productos</title>
<?php 
    require "../metodos.php";
?>
<?php 
   require "../mlibs/header.php"
?>
 


  <body background="../img/usuarios.jpg" style="background-size:cover";>

    <div class="container">
  <div class="py-5 text-center">
  <div class="col-sm-2 mt-2 mb-1 p-2"></div>
    <div class="col-sm-2"><h2></h2></div>	
 
    <p class="lead"><h4><strong>Ingreso de Usuarios y Servicios / Profesiones para la App</strong></h4></p>
  </div>
      
	  
<?php
 require "../conexion.php";
 $sql = "insert into usuarios(
  nickname_usuario,nombre_usuario,apellido_usuario,dni_usuario,domicilio_usuario,email_usuario,contraseña_usuario,permiso_usuario)
  values" 
  . "('".$_POST['nickname_usuario'] 	. "'," 
  . "'".$_POST['nombre_usuario'] 	. "'," 
  . "'" .$_POST['apellido_usuario'] 	. "',"
  . "'" .$_POST['dni_usuario'] 	. "',"	
  . "'" .$_POST['domicilio_usuario'] 	. "',"
  . "'" .$_POST['email_usuario'] 	. "',"	
  . "'" .$_POST['contraseña_usuario'] 	. "',"	
  . "'" .$_POST['permiso_usuario'] 	. "' "	
  . ")";
  


if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../usuarios/'> <div class='col-md-12 order-md-1'>";
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


