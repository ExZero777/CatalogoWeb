
<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Listado De Productos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="<?php echo "../listados2/comentariosn.php?id_producto=". $_GET['id_producto'];?>"  class="list-group-item list-group-item-action bg-warning text-dark">Nuevo Comentario</a>
                </li>
                <li>
                  <a href="javascript:history.go(-1)" class="list-group-item list-group-item-action bg-warning text-dark">Volver</a>
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
        <h2 class="mt-4">Listado De Comentarios</h2>
      </div>  

      <?php 				
      	$long = count($comentarios);
      	for($i=0; $i< $long; $i++){
      ?>
	    <div class="list-group">
        <a 
			   	class="list-group-item bg-dark text-white">
			  	<h4 class="list-group-item-heading"> <?php echo $comentarios[$i]['id_comentario'] ."";?> </h4>
          <p class="list-group-item-text"><?php 		echo "Producto: " . $comentarios[$i]['producto_comentario'] ." - Fecha: "; 
                            echo $comentarios[$i]['fecha_comentario'] ." - Comentario: "; 
                            echo $comentarios[$i]['comentario_comentario'] ." - Ranqueo: ";
                            echo $comentarios[$i]['ranqueo_comentario'] ."";
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

