<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Productos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../categorias/categorias.php" class="list-group-item list-group-item-action bg-warning text-dark">Nuevo</a>
                </li>
                <li>
                  <a href="../subcategorias/index.php" class="list-group-item list-group-item-action bg-warning text-dark">SubCategorias</a>
                </li>
                <li>
                  <a href="../marcas/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Marcas</a>
                </li>
            </ul> 
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
  
      <div class="mt-4 text-dark">
        <h2 class="mt-4">Listado De Categorias</h2>
      </div>  

      <?php 				
      	$long = count($categorias);
      	for($i=0; $i< $long; $i++){
      ?>
	    <div class="list-group">
        <a 	<?php echo "href=modifica.php?id_categoria=".$categorias[$i]['id_categoria'];?>
			   	class="list-group-item bg-dark">
			  	<h4 class="list-group-item-heading"> <?php echo $categorias[$i]['id_categoria'] ."";?> </h4>
          <p class="list-group-item-text"><?php 	echo "Nombre: " . $categorias[$i]['nombre_categoria'] ." - Activo:"; 
                                                  echo $categorias[$i]['activo_categoria'] .""; 
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

