<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> TALLER CRUD COMPLETO XAVIER AGUIRRE </title>
</head>
<body>
<?php
	if(isset($_SESSION['usuario'])){
	   echo "<p> Bienvenido Usuario:(" .$_SESSION['usuario'].")[<a href='logout.php'>Salir</a>]</p>";
	}else{
	?>
	<form action ="administracioncentral.php" method ="post">
	  <fielset>
	  	<label> User </label>
		<input type="text" name= "Usuario"/> </br>
		<label> Password </label>
		<input type="text" name= "Clave"/> </br>
		<button type ="submit"> Enviar </button>
	  </fieldset>
	</form>
	<?php } ?>


</body>
</html>
