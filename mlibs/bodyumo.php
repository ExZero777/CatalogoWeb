<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper" >
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../usuarios/" class="list-group-item list-group-item-action bg-dark text-white">Volver</a>  
      </div>
    </div>
    
  <div id="page-content-wrapper align-self-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
      <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
        
    
  
      
<?php

require "../conexion.php";
require "../metodos.php";




$sql = "UPDATE usuarios SET nickname_usuario='" . ($_POST['nickname_usuario']) 				."'," .
  "nombre_usuario='" 		. $_POST['nombre_usuario']									."'," .			
  "apellido_usuario='" 		. $_POST['apellido_usuario']									."'," .			
  "dni_usuario='" 		. $_POST['dni_usuario']									."'," .			
  "domicilio_usuario='" 		. $_POST['domicilio_usuario']									."'," .			
  "email_usuario='" 		. $_POST['email_usuario']									."'," .			
  "contraseña_usuario='" 		. $_POST['contraseña_usuario']									."'," .			
  "permiso_usuario='" 	. $_POST['permiso_usuario']								."'" .			
  " where id_usuario =" . ($_POST['id_usuario']) ;							
          

?>								


<div class="container" >

<DIV ALIGN=center>
<div class="py-5 text-center ">

  
  
  <p class="lead"><h4><strong>Modificación de Usuarios</strong></h4></p>



<?php 
if ($mysqli->query($sql) === TRUE) {

echo "  <a href='../usuarios/'> <div class='col-md-12 order-md-1'>";
echo    "<h4 class='mb-4'>Datos Modificados Correctamente</h4> </a>";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>

    <?php
      include "footer.php"
    ?>
  </div> 
</div>

