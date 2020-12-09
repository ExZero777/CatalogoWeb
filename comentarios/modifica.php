<!doctype html>
<html>
<title>Modificacion De Comentarios</title>
<?php 
    require "../metodos.php";
    require "../mlibs/header.php"     
?>

<body background="../img/marcas.jpg" style="background-size:cover";>


<?php 
   
   require "../conexion.php";
   $sql = "SELECT * from comentarios where id_comentario = " . $_GET['id_comentario'];
   $query = $mysqli->query($sql);
   while($resultado = $query->fetch_assoc()) {
         $comentarios[] = $resultado;
     }  
     
	echo "<input type='hidden' name='id_comentario' value=" .$_GET['id_comentario'] .">"; 
?>  
	  <?php
    require "../mlibs/bodymc.php";
  ?>

  <?php
    require "../mlibs/script.php"
  ?>

</div>
</body>
</html>
