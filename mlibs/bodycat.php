<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Productos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../categorias/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Categorias</a>
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
    
  <div id="page-content-wrapper" >
    <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
      <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

    </nav>
      
     
    <div class="col-md-12 order-md-1" ALIGN=center>
    <h2 class="mt-4 text-dark" >Alta De Categorias</h2>



<div class="container">
    <div class="d-flex justify-content-center text-dark">
      <form ALIGN=center class="form-horizontal" action="../categorias/grabar.php" method="POST">
        <div class="form-group">

          <div class="col-md-12 mb-4">
            <label for="nombre_categoria">Nombre</label>
            <input type="text" class="form-control" name="nombre_categoria" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre De La Categoria
            </div>
          </div>
        
          <div class="col-md-12 mb-4">
            <label for="activo_categoria">Activa(Si/1 O No/0)</label>
            <select type="text" class="custom-select d-block w-100" name="activo_categoria" placeholder="" value="" required>
              <option value=0>Inactivo</option>
              <option value=1>Activo</option>
            </select>
            <div class="invalid-feedback">
              Faltó Ingresar Si La Categoria Es Activa O No
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

