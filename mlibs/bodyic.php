<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-white">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Comentarios</a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Comentarios</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../mlibs/ordenac.php" class="list-group-item list-group-item-action bg-warning text-dark">Activos</a>
                </li>
                <li>
                  <a href="../mlibs/ordenic.php" class="list-group-item list-group-item-action bg-warning text-dark">Inactivos</a>
                </li>
                <li>
                  <a href="../comentarios/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Volver</a>
                </li>
            </ul> 
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
        <a href="../usuarios/" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a>
        <a href="../contacto/" class="list-group-item list-group-item-action bg-dark text-white">Contactenos</a>
        
        <a href="../" class="list-group-item list-group-item-action bg-dark text-white">Salir</a>
      </div>
    </div>
    
  <div id="page-content-wrapper align-self-center" >
    <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
      <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      
    </nav>
        
    <div class="mt-4 align-self-center text-left">
  
      <div class="mt-4 text-white">
        <h2 class="mt-4">Listado De Comentarios</h2>
      </div>  

      <?php 				
      	$long = count($comentarios);
      	for($i=0; $i< $long; $i++){
      ?>
	    <div class="list-group">
        <a 	<?php echo "href=../comentarios/modifica.php?id_comentario=".$comentarios[$i]['id_comentario'];?>
			   	class="list-group-item bg-dark">
			  	<h4 class="list-group-item-heading"> <?php echo $comentarios[$i]['id_comentario'] ."";?> </h4>
          <p class="list-group-item-text"><?php 	echo "Producto: " . $comentarios[$i]['producto_comentario'] ." - Fecha:"; 
                                                  echo $comentarios[$i]['fecha_comentario'] ." - Comentario: "; 
                                                  echo $comentarios[$i]['comentario_comentario'] ." - Ranqueo: ";
                                                  echo $comentarios[$i]['ranqueo_comentario'] ." - Activo";
                                                  echo $comentarios[$i]['activo_comentario'] .""; 
                                                  ?>
          </p>		 
			  </a>
      </div>
	    <?php  } ?>
    </div> 
    <?php
      include "footer.php"
    ?>
  </div> 
</div>

