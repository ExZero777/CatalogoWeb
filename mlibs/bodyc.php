<div class="d-flex" id="wrapper">
  
  <div class="bg-black border-right" id="sidebar-wrapper">
    <div class="sidebar-heading bg-black text-dark">Menú de Opciones</div>
      <div class="list-group list-group-flush">
        <a href="../listados/" class="list-group-item list-group-item-action bg-dark text-white">Listado De Productos</a>  
        <a href="../comentarios/" class="list-group-item list-group-item-action bg-dark text-white">Comentarios</a>
        <a href="../productos/" class="list-group-item list-group-item-action bg-dark text-white">Productos</a>
        <a href="../usuarios/" class="list-group-item list-group-item-action bg-dark text-white">Usuarios</a>
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
        
    
  
      <section class="articulos"> 
        <article class="articulo">
          <div class="col-md-12 order-md-1" ALIGN=center>
            <h1>Contactanos!</h1>
            
        <div class="container">
          <div class="d-flex justify-content-center text-white"> 

            <form action="../mlibs/mail.php" method="GET" name="miform" ALIGN=center>
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="campo" name="nombreUsuario" id="nombre" type="text" style="width: 100%">

                <label for="nombre">Apellido</label>
                <input placeholder="Apellido" class="campo" name="apellidoUsuario" id="apellido" type="text" style="width: 100%">

                <label for="mail">Mail</label>
                <input placeholder="Mail" class="campo" id="mail" name="mailUsuario" type="text" style="width: 100%">

                <label for="telefono">Telefono</label>
                <input placeholder="Telefono" class="campo" id="mail" name="telUsuario" type="text" style="width: 100%">

                <label for="area">Area</label>
                <input placeholder="Area" class="campo" id="mail" name="areaUsuario" type="text" style="width: 100%">

                <label for="asunto">Asunto</label>
                <input placeholder="Asunto" class="campo" id="asunto" name="asunto" type="text" style="width: 100%">

                <label for="comentario">Comentario</label>
                <textarea placeholder="Mensaje" class="campo" id="mensaje" name="comentario" style="height: 200px; width: 100%; resize: none"></textarea>
                </div>
                <div ALIGN=center>
                 <button input class="btn btn-success btn-lg btn-block col-sm-4" type="submit">Enviar</button></div>
                </div>
            </form>
            </article>
          </section>
          </div> 
    </div> 
    <?php
      include "footer.php"
    ?>
  </div> 
</div>

