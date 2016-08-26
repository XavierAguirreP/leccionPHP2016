<?php
require_once 'programaColector.php';
require_once 'programa.php';
$alm = new programa();
$model = new programaColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
	<form id="formularioPrograma" action="insertarPrograma.php" method="get">
		<p>Nombre: <input type="text" name="nombre" /></p>
		<p>Pais: <input type="text" name="pais" /></p>
		<p><input type="submit" name="guardar" value ="guardar"></p>
		<br>
		<a href="programaList.php">volver</a>
	</form>
	</form>

</html>
