<?php
session_start();
?>
<?php
	$_SESSION['usuario'] = $_POST['Usuario'];
	echo "Bienvenido estimado(a): " .$_SESSION['usuario'];
?>
