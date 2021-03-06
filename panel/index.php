<!DOCTYPE html>
<html lang="en">
<title>Panel de Control</title>
<?php
   include "../mlibs/header.php"
?>

<body background="../img/panel.jpg" style="background-size:100% 100%";>



  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
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
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Ver / Ocultar</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      
      <div class="col-sm-2 text-dark">
        <h2 class="mt-4">CatalogoWeb</h2>
	    </div>

      <div class="container-fluid text-dark">
        <h1 class="mt-4"><img class="d-block mx-auto mb-4" src="../img/jdlsa.jpg" alt="" width="75" height="75"></h1>
        <h5 class="mt-4">Panel de Control</h5>
        <p>Configuración de datos para control e incorporación de información en la app móvil.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
