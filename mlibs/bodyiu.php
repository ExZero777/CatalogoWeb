<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
        
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Usuarios</a>
            <ul class="in list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../usuarios/usuarios.php" class="list-group-item list-group-item-action bg-warning text-dark">Nuevo</a>
                </li>
                <li>
                  <a href="../perfiles/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Perfiles</a>
                </li>
                <li>
                  <a href="../usuarios/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Listado De Usuarios</a>
                </li>
                
            </ul>         
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
     
    <div class="col-md-12 order-md-1" ALIGN=center>
    <h2 class="mt-4 text-dark" >Modificacion De Datos De Los Usuarios</h2>



<div class="container">
    <div class="d-flex justify-content-center text-white" >
      <form ALIGN=center class="form-horizontal">
        <div class="form-group" >
    
      
      <?php 				
      	$long = count($usuarios);
      	for($i=0; $i< $long; $i++){
      ?>

	  <div class="list-group">
      <a 	<?php echo "href=modifica.php?id_usuario=".$usuarios[$i]['id_usuario'];?>
						 class="list-group-item bg-dark col-md-12 mb-4">
				<h4 class="list-group-item-heading"> <?php echo $usuarios[$i]['id_usuario'] ."";?> </h4>
				<p class="list-group-item-text"><?php 	echo "NickName: " . $usuarios[$i]['nickname_usuario'] ." - Nombre: "; 
                            echo $usuarios[$i]['nombre_usuario'] ." - Apellido: "; 
                            echo $usuarios[$i]['apellido_usuario'] ." - DNI: "; 
                            echo $usuarios[$i]['dni_usuario'] ." - Domicilio: "; 
                            echo $usuarios[$i]['domicilio_usuario'] ." - Email: ";
                            echo $usuarios[$i]['email_usuario'] ." - Email: ";
                            echo $usuarios[$i]['contraseña_usuario'] ." - Permiso: ";
                            echo $usuarios[$i]['permiso_usuario'] ."";
                            ?>
        </p>		 
			  </a>
       <?php  } ?>
    </div>
    
    
     </form>

    </div>
    
    <?php
      include "footer.php"
    ?>
  </div> 
</div>

