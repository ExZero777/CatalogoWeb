<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Listado De Productos</a>
            <ul class="in list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../listados2/categorias.php" class="list-group-item list-group-item-action bg-warning text-dark">Categorias</a>
                </li>
                <li>
                  <a href="../mlibs/ordenpza2.php" class="list-group-item list-group-item-action bg-warning text-dark">Z-A</a>
                </li>
                <li>
                  <a href="../mlibs/ordenpaz2.php" class="list-group-item list-group-item-action bg-warning text-dark">A-Z</a>
                </li>
                <li>
                  <a href="../mlibs/ordenpr2.php" class="list-group-item list-group-item-action bg-warning text-dark">Ranqueados</a>
                </li>
                <li>
                  <a href="../mlibs/ordenpdes2.php" class="list-group-item list-group-item-action bg-warning text-dark">Destacados</a>
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
        <h2 class="mt-4">Listado De Productos</h2>
      </div>  

      <?php 				
      	$long = count($productos);
      	for($i=0; $i< $long; $i++){
      ?>
	    <div class="list-group">
        <a 	<?php echo "href=descripciones.php?id_producto=".$productos[$i]['id_producto'];?>
			   	class="list-group-item bg-dark">
			  	<h4 class="list-group-item-heading"> <?php echo $productos[$i]['id_producto'] ."";?> </h4>
          <p class="list-group-item-text"><?php 		echo "Nombre: " . $productos[$i]['nombre_producto'] ." - Descripcion: "; 
                            echo $productos[$i]['marca_producto'] ." - Modelo: "; 
                            echo $productos[$i]['modelo_producto'] ." - Foto: ";
                            echo $productos[$i]['foto_producto'] ." - Ranqueo: ";
                            echo $productos[$i]['ranqueo_producto'] ." - Usuario: ";
                            echo $productos[$i]['usuario_producto'] ." - Categoria: ";  
                            echo $productos[$i]['categoria_producto'] ." - SubCategoria: ";  
                            echo $productos[$i]['subcategoria_producto'] ." - Destacado: ";    
                            echo $productos[$i]['destacado_producto'] ."";
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

