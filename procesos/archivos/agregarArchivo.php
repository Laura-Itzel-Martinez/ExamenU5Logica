<?php 

	include "../../clases/archivos.php";
	$Archivos = new Archivos();

	$datos = array(

				"nombre" => $_POST['nombreArchivo'],
				"archivo" => $_POST['archivo']

					);
					
		echo $Archivos->agregarNuevoArchivo($datos);
 ?>