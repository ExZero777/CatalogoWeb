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
                <li>
                  <a href="#" class="list-group-item list-group-item-action bg-warning text-dark">A-Z...Z-A</a>
                </li>
            </ul>   
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a>
        <      
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
    <h2 class="mt-4 text-dark" >Alta De Productos</h2>



<div class="container">
    <div class="d-flex justify-content-center text-dark">
      <form ALIGN=center class="form-horizontal" action="../productos/grabar.php" method="POST">
        <div class="form-group">


          
          <div class="col-md-12 mb-4">
            <label for="nombre_producto">Nombre</label>
            <input type="text" class="form-control" name="nombre_producto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Nombre Del Producto
            </div>
          </div>
        
          <div class="col-md-12 mb-4">
            <label for="descripcion_producto">Descripcion</label>
            <input type="text" class="form-control" name="descripcion_producto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Descripcion Del Producto
            </div>
          </div>
      
         
          <div class="col-md-12 mb-4">
            <label for="marca_producto">Marca</label>
            <input type="text" class="form-control" name="marca_producto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar La Marca Del Producto
            </div>
          </div>

          <div class="col-md-12 mb-4">
            <label for="modelo_producto">Modelo</label>
            <input type="text" class="form-control" name="modelo_producto" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Modelo Del Producto
            </div>
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="foto_producto">Foto</label>
            
            <input type="file" class="form-control" id="image" name="foto_producto" placeholder="" value="" multiple>
            <div class="invalid-feedback">
              Faltó Ingresar La Foto Del Producto
            </div>
          </div>

          <div class="col-md-12 mb-4">
            <label for="ranqueo_producto">Ranqueo(Del 1 Al 5)</label>
            <select type="text" class="custom-select d-block w-100" name="ranqueo_producto" placeholder="" value="" required>
              <option value=1>Mala</option>
              <option value=2>No Tan Buena</option>
              <option value=3>Buena</option>
              <option value=4>Muy Buena</option>
              <option value=5>Excelente</option>
            </select>
            <div class="invalid-feedback">
              Faltó Ingresar El Ranqueo Del Producto 
            </div>
          </div>
      
        
          <div class="col-md-12 mb-4">
           <label for="usuario_producto">Usuario</label>
           <select class="custom-select d-block w-100" name="usuario_producto" required>
           <?php 
				     $long = count($usuarios);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$usuarios[$i]['id_usuario'].">";				
                 echo $usuarios[$i]['nombre_usuario'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Un Usuario Para El Producto
            </div>
          </div>

          <div class="col-md-12 mb-4">
           <label for="categoria_producto">Categoria</label>
           <select class="custom-select d-block w-100" name="categoria_producto" required>
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
              Faltó Seleccionar Una Categoria Para El Producto
            </div>
          </div>    

          <div class="col-md-12 mb-4">
           <label for="subcategoria_producto">SubCategoria</label>
           <select class="custom-select d-block w-100" name="subcategoria_producto" required>
           <?php 
				     $long = count($categorias);
				     for($i=0; $i< $long; $i++){
				     echo "<option";
             echo " value=" .$categorias[$i]['id_subcategoria'].">";				
                 echo $categorias[$i]['nombre_subcategoria'];
              
				     echo "</option>";
             }
				   ?>
            </select>
            <div class="invalid-feedback">
              Faltó Seleccionar Una Categoria Para El Producto
            </div>
          </div>   

          <div class="col-md-12 mb-4">
            <label for="destacado_producto">Destacado(Si/1 O No/0)</label>
            <select type="text" class="custom-select d-block w-100" name="destacado_producto" placeholder="" value=<?php echo "'".$productos[0]['destacado_producto']."'" ?> required>
              <option value=0>No</option>
              <option value=1>Si</option>
            </select>
            <div class="invalid-feedback">
              Faltó Ingresar Si El Producto Es Destacado O No
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

