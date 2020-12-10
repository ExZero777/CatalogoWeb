<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-white">Menú de Opciones</div>
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
    
  <div id="page-content-wrapper" >
    <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
      <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
      
    <div class="col-md-12 order-md-1" ALIGN=center>
    <h2 class="mt-4 text-white" >Alta De Usuarios</h2>



<div class="container">
    <div class="d-flex justify-content-center text-white">
      <form ALIGN=center class="form-horizontal" action="../usuarios/grabar.php" method="POST">
        <div class="form-group">


          <div class="col-md-12 mb-4">
            <label for="nickname_usuario">NickName</label>
            <input type="text" class="form-control" name="nickname_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El NickName Del Usuario
            </div>
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="nombre_usuario">Nombre</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Usuario
            </div>
          </div>
        
          <div class="col-md-12 mb-4">
            <label for="apellido_usuario">Apellido</label>
            <input type="text" class="form-control" name="apellido_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Apellido Del Usuario
            </div>
          </div>
      
         
          <div class="col-md-12 mb-4">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" name="dni_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El DNI Del Usuario
            </div>
          </div>

          <div class="col-md-12 mb-4">
            <label for="email_usuario">Email</label>
            <input type="text" class="form-control" name="email_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Email Del Usuario
            </div>
          </div>

          <div class="col-md-12 mb-4">
            <label for="contraseña_usuario">Contraseña</label>
            <input type="text" class="form-control" name="contraseña_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Contraseña Del Usuario
            </div>
          </div>

           <div class="col-md-12 mb-4">
            <label for="domicilio_usuario">Dirección</label>
            <input type="text" class="form-control" name="domicilio_usuario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Direccion Del Usuario
            </div>
          </div>
      
        
          <div class="col-md-12 mb-4">
           <label for="permiso_usuario">Permiso</label>
           <select class="custom-select d-block w-100" name="permiso_usuario" required>
           <?php 
				     $long = count($permisos);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$permisos[$i]['id_permiso'].">";				
                 echo $permisos[$i]['nombre_permiso'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Permiso Para El Usuario
            </div>
          </div>  
          
    </div>
    <hr class="mb-4">
    <div ALIGN=center>
        <button class="btn btn-success btn-lg btn-block col-sm-12" type="submit">Guardar</button>
      </form>
    </div>
    
 </div>    
    <?php
      include "footer.php"
    ?>
  </div> 
</div>

