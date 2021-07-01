<?php 

	require_once "conexion.php";

	class Archivos extends Conexion {
		public function agregarNuevoArchivo($datos) {
			$conexion = Conexion::conectar();

			$sql = "INSERT INTO t_archivos (nombre, archivo) 
					VALUES (?, ?)";

			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
									 $datos['archivo']);
			$respuesta = $query->execute();
			return $respuesta;
		}
		public function eliminaArchivo($idArchivo) {
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM t_archivos WHERE id_archivo = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idArchivo);
			$respuesta = $query->execute();
			return $respuesta;
		}
		

	}
 ?>