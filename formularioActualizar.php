<?php
require_once 'demoColector.php';
require_once 'demo.php';

$idUpdate = $_GET['id'];
$nameUpdate = $_GET['nombre'];

$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
	<form id="formularioActualizar" action="actualizar.php" method="get">
		<p>ID: <input type="text" id="id" name="id" value=<?php echo $idUpdate ?>></p>
		<p>Nombre: <input type="text" id="nombre" name="nombre" value=<?php echo $nameUpdate ?>></p>
		<!-- <p>Foto: <input type="text" name="Password" /></p> -->
		<p><input type="submit" name="actualizar" value ="actualizar"></p>
		<br>
		<a href="DemoList.php">volver</a>
	</form>
	</form>

</html>
