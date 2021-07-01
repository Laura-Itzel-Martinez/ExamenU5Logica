<?php 

	include "../../clases/archivos.php";
	$idArchivo = $_POST['idArchivo'];

    $Categorias = new Archivos();
    echo $Categorias->eliminaArchivo($idArchivo);
 ?>