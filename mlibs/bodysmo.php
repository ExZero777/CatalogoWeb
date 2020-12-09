<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper" >
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../subcategorias/" class="list-group-item list-group-item-action bg-dark text-white">Volver</a>  
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




$sql = "UPDATE subcategorias SET nombre_subcategoria='" . ($_POST['nombre_subcategoria']) 				."'," .		
  "categoria_subcategoria='" 		. $_POST['categoria_subcategoria']									."'," .			
  "activo_subcategoria='" 	. $_POST['activo_subcategoria']								."'" .			
  " where id_subcategoria =" . ($_POST['id_subcategoria']) ;							
          

?>								


<div class="container" >

<DIV ALIGN=center>
<div class="py-5 text-center ">

  
  
  <p class="lead"><h4><strong>Modificación De Subcategorias</strong></h4></p>



<?php 
if ($mysqli->query($sql) === TRUE) {

echo "  <a href='../subcategorias/'> <div class='col-md-12 order-md-1'>";
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

