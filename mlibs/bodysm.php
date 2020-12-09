<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Productos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="../subcategorias/index.php" class="list-group-item list-group-item-action bg-warning text-dark">Volver</a>
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
    <h2 class="mt-4 text-dark" >Modificacion De Datos De Las Subcategorias</h2>



<div class="container">
    <div class="d-flex justify-content-center text-dark">
      <form ALIGN=center class="form-horizontal" action="../subcategorias/modi.php" method="POST">
        <div class="form-group">

           
        <div class="col-md-12 mb-4">
          
            <input type="hidden" class="form-control" name="id_subcategoria" placeholder="" value=<?php echo "'".$subcategorias[0]['id_subcategoria']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El ID De La Subcategoria
            </div>
          </div> 
          
          <div class="col-md-12 mb-4">
            <label for="nombre_subcategoria">Nombre</label>
            <input type="text" class="form-control" name="nombre_subcategoria" placeholder="" value=<?php echo "'".$subcategorias[0]['nombre_subcategoria']."'" ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre De La Subcategoria
            </div>
          </div>

          <div class="col-md-12 mb-4">
           <label for="categoria_subcategoria">Categoria</label>
           <select class="custom-select d-block w-100" name="categoria_subcategoria" required>
           <?php 
				     $long = count($categorias);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$categorias[$i]['id_categoria'].">";				
                 echo $categorias[$i]['nombre_categoria'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Una Categoria Para La Subcategoria
            </div>
          </div> 

          <div class="col-md-12 mb-4">
            <label for="activo_subcategoria">Activa(Si/1 O No/0)</label>
            <select type="text" class="custom-select d-block w-100" name="activo_subcategoria" placeholder="" value=<?php echo "'".$subcategorias[0]['activo_subcategoria']."'" ?> required>
              <option value=0>Inactivo</option>
              <option value=1>Activo</option>
            </select>
            <div class="invalid-feedback">
              Faltó Ingresar Si La Subcategoria Esta Activa O No
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

