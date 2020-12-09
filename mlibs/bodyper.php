<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-white">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
        
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Usuarios</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../perfiles/perfiles.php" class="list-group-item list-group-item-action bg-warning text-dark">Nuevo</a>
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
    <h2 class="mt-4 text-white" >Alta De Perfiles</h2>



<div class="container">
    <div class="d-flex justify-content-center text-white">
      <form ALIGN=center class="form-horizontal" action="../perfiles/grabar.php" method="POST">
        <div class="form-group">


          <div class="col-md-12 mb-4">
            <label for="nombre_permiso">Nombre</label>
            <input type="text" class="form-control" name="nombre_permiso" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Permiso Del Usuario
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

