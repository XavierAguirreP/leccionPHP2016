<?php
	session_start();
?>
<?php
	require_once 'becarioColector.php';
	require_once 'conexion.php';
	require_once 'becario.php';
	$alm = new becario();
	$model = new becarioColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administracion BECARIO</title>       
	</head>
    <body style="padding:15px;">

	<h2>ADMINISTRACION BECARIO</h2>

	<a href='formularioBecario.php'>Create</a>
	<br />

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">ID</th>
                            <th style="text-align:left;">NOMBRE</th>
                            <th style="text-align:left;">PROGRAMA</th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarBECARIO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>
			    <td><?php echo $r->getPrograma();?></td>  
			    <td><a href="formularioActualizar.php?id=<?php echo $r->getid_demo(); ?>&nombre=<?php echo $r->getNombre();?>">Update</a></td>
			    <td><a href="borrar.php?id=<?php echo $r->getid_demo(); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
