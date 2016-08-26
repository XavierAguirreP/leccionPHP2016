<?php
require_once 'programaColector.php';
require_once 'programa.php';
$varNombre = $_GET['nombre'];
$varPais = $_GET['pais'];
echo "<br>";
$alm = new programa();
$model = new programaColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>INSERTAR</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        
                    </thead>
					
					
                </table>     
			<span>
				<?php  
					$model->InsertPROGRAMA($varNombre, $varPais);
					echo "se inserto registro, ejecute la consulta para verificar";
				?>
			</span>
			<a href="programaList.php">volver</a>
            </div>
        </div>

    </body>
</html>
