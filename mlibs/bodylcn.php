<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-white">Menú de Opciones</div>
      <div class="list-group list-group-flush">
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action dropdown-toggle bg-dark text-white">Listado De Productos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <a href="javascript:history.go(-1)" class="list-group-item list-group-item-action bg-warning text-dark">Volver</a>
                </li>
            </ul>         
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
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
    <h2 class="mt-4 text-white" >Alta De Comentarios</h2>



<div class="container">
    <div class="d-flex justify-content-center text-white">
      <form ALIGN=center class="form-horizontal" action="<?php echo "../listados/grabar.php?id_producto=". $_GET['id_producto'];?>" method="POST">
        <div class="form-group">

         
      
        
          <div class="col-md-12 mb-4">
            <label for="fecha_comentario">Fecha</label>
            <input type="date" class="form-control" name="fecha_comentario" placeholder="" value=<?php $hoy = getdate(); ?> required>
            <div class="invalid-feedback">
              Faltó Ingresar La Fecha Del Comentario 
            </div>
          </div>
      
         
          <div class="col-md-12 mb-4">
            <label for="comentario_comentario">Comentario</label>
            <input type="text" class="form-control" name="comentario_comentario" placeholder="" value="" required>
            <div class="invalid-feedback">
              Faltó Ingresar El Comentario 
            </div>
          </div>

          <div class="col-md-12 mb-4">
            <label for="ranqueo_comentario">Ranqueo(Del 1 Al 5)</label>
            <select type="text" class="custom-select d-block w-100" name="ranqueo_comentario" placeholder="" value="" required>
              <option value=1>Mala</option>
              <option value=2>No Tan Buena</option>
              <option value=3>Buena</option>
              <option value=4>Muy Buena</option>
              <option value=5>Excelente</option>
            </select>
            <div class="invalid-feedback">
              Faltó Ingresar El Ranqueo Del Comentario 
            </div>
          </div>
           
          <div class="col-md-12 mb-4">
            
            <input type="hidden" class="form-control" name="activo_comentario" placeholder="" value=0 required>
            <div class="invalid-feedback">
              Faltó Ingresar El Comentario 
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

