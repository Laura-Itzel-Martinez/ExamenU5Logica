<?php

    require_once "../../clases/archivos.php";
    $Gestor = new Archivos();
    $idCategoria = $_POST['idCategoria'];

    if ($_FILES['archivos']['size'] >0 ) {
        $totalArchivos= count($_FILES ['archivos']['name']);
        for ($i=0; $i < $totalArchivos; $i++) { 
            $nombreArchivo=$_FILES['archivos']['name'][$i];
            $rutaAlmacenamiento= $_FILES['archivos']['tmp_name'];
            $carpeta = "../../almacenar/";
            $rutaFinal = $carpeta.$nombreArchivo;

            echo move_uploaded_file ($rutaAlmacenamiento,$rutaFinal);
            
        }
       
    } else {
        echo 0;
    }
    
