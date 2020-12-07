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

$sql = "update usuarios set usuarios.permiso_usuario=NULL where id_usuario=" . $_GET['id_usuario'] ;		
?>

  
    <div class="container">
  <div class="py-5 text-center">
  <div class="col-md"><img class="d-block mx-auto mb-1" src="../img/jdlsa2.jpg" alt="" width="62" height="62"></div>
  <div class="col-md"><h5>JDL S.A</h5></div>
  <p class="lead"><h4><strong>Eliminar Usuarios</strong></h4></p>
  </div>

  
 <?php 
  if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../usuarios/'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 class='mb-4'>Usuario Eliminado Correctamente</h4> </a>";
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

