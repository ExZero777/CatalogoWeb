<html>
<title>Categoria Creada</title>
<?php 
    require "../mlibs/header.php";
?>

<body background="../img/gmb.jpg" style="background-size:cover";>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->

<div class="bg-black border-right" id="sidebar-wrapper">
  
  <div class="list-group list-group-flush " ALIGN=center>
    <a href="../categorias/categorias.php" class="list-group-item list-group-item-action bg-dark text-white " >Volver</a>
    
  </div>
</div>
<!-- /#Sidebar -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-black border-bottom">
    <button class="btn btn-primary bg-danger border-dark" id="menu-toggle">Ver / Ocultar</button>

    

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
    
<?php
 require "../conexion.php";
 $sql = "insert into categorias(
  nombre_categoria,activo_categoria)
  values" 
  . "('".$_POST['nombre_categoria'] 	. "'," 
  . "'" .$_POST['activo_categoria'] 	. "' "	
  . ")";
  

if ($mysqli->query($sql) === TRUE) {

  echo "  <a href='../'> <div class='col-md-12 order-md-1'>";
  echo    "<h4 ALIGN=center class='mb-4'>Datos Guardados Correctamente</h4> </a>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  echo    "<h4 ALIGN=center class='mb-4'>Datos Guardados Inorrectamente,Favor De Intentarlo Nuevamente</h4> </a>";
}

$mysqli->close();
		
?>

<?php
    require "../mlibs/footer.php"
?>

</div>


