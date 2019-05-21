<?php
session_start();
include 'Conexion.php';

if(isset($_SESSION['nombre'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
   
    <?php
    echo "Nombre: " . $_SESSION['nombre'] . "<p/>";
    ?>
  </article>
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>