<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Listado De Productos</a>
            <ul class="in list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../listados/categorias.php" class="list-group-item list-group-item-action bg-warning text-dark">Categorias</a>
                </li>
                <li>
                  <a href="../mlibs/ordenmza.php" class="list-group-item list-group-item-action bg-warning text-dark">Z-A</a>
                </li>
                <li>
                  <a href="../mlibs/ordenmaz.php" class="list-group-item list-group-item-action bg-warning text-dark">A-Z</a>
                </li>
            </ul>         
        <a href="../contacto2/" class="list-group-item list-group-item-action bg-dark text-white">Contactenos</a>
        
  
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
        <h2 class="mt-4">Listado De Marcas</h2>
      </div>  

      <?php 				
      	$long = count($marcas);
      	for($i=0; $i< $long; $i++){
      ?>
	    <div class="list-group">
        <a 	<?php echo "href=modifica.php?id_marca=".$marcas[$i]['id_marca'];?>
			   	class="list-group-item bg-dark">
			  	<h4 class="list-group-item-heading"> <?php echo $marcas[$i]['id_marca'] ."";?> </h4>
          <p class="list-group-item-text"><?php 	echo "Nombre: " . $marcas[$i]['nombre_marca'] ." - Activo:"; 
                                                  echo $marcas[$i]['activo_marca'] .""; 
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

