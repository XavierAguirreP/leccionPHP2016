<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administracion Central</title>
</head>
<body>
	<?php
		$_SESSION['usuario'] = $_POST['Usuario'];
		echo "Bienvenido estimado(a): " .$_SESSION['usuario'];
	?>
	<a href="logout.php">Cerrar sesión</a>

	<h2 align="center">ADMINISTRACION CENTRAL</h2>

	<a href='becarioList.php'>BECARIO</a>
	<a href='programaList.php'>PROGRAMA</a>
	<a href='ReporteList.php'>REPORTE</a>
</body>
</html>
