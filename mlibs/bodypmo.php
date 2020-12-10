<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper" >
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Volver</a>  
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

$ruta ="../img/subs/".$_FILES['foto_producto']['name'];
move_uploaded_file($_FILES["foto_producto"]["tmp_name"],$ruta);
$ruta = "../CatalogoWeb/img/subs/".$_FILES['foto_producto']['name'];


$sql = "UPDATE productos SET nombre_producto='" . ($_POST['nombre_producto']) 				."'," .
  "descripcion_producto='" 		. $_POST['descripcion_producto']									."'," .			
  "marca_producto='" 		. $_POST['marca_producto']									."'," .			
  "modelo_producto='" 		. $_POST['modelo_producto']									."'," .			
  "foto_producto='" 		. $ruta									."'," .			
  "ranqueo_producto='" 		. $_POST['ranqueo_producto']									."'," .			
  "usuario_producto='" 		. $_POST['usuario_producto']									."'," .		
  "categoria_producto='" 		. $_POST['categoria_producto']									."'," .		
  "subcategoria_producto='" 		. $_POST['subcategoria_producto']									."'," .		
  "destacado_producto='" 		. $_POST['destacado_producto']									."'," .		
  "activo_producto='" 	. $_POST['activo_producto']								."'" .			
  " where id_producto =" . ($_POST['id_producto']) ;							
          

?>								


<div class="container" >

<DIV ALIGN=center>
<div class="py-5 text-center ">

  
  
  <p class="lead"><h4><strong>Modificación de Productos</strong></h4></p>



<?php 
if ($mysqli->query($sql) === TRUE) {

echo "  <a href='../productos/'> <div class='col-md-12 order-md-1'>";
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

