<?php 
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$sql = "SELECT 
    archivos.nombre AS nombre, 
    archivos.archivo AS archivo, 
    categorias.nombre AS categoria, 
    archivos.id_archivo,
    archivos.ruta AS rutaArchivo,
    archivos.fecha AS fecha
    
    FROM t_archivos AS archivos 
    INNER JOIN t_categorias AS categorias
    ON archivos.id_categoria = categorias.id_categoria";

					
	$result = mysqli_query($conexion, $sql);
 ?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="tablaCategoriasDT">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Archivo</th>
                        <th>Categoria</th>
                        <th>Descargar</th>
                        <th>Abrir</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					while($mostrar = mysqli_fetch_row($result)) {  
						
				?>
                    <tr>
                
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['archivo'] ?></td>
                    <td><?php echo $mostrar['categoria'] ?></td>

                    <td><span class="btn btn-info">Descargar</span></td>
                    <td><span class="btn btn-success">Abrir Archivo</span></td>
                    <td><span class="btn btn-danger" onclick="eliminarArchivo()">Eliminar</span></td>
                    </tr>

                <?php 
					}
				 ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCategoriasDT').DataTable();
	});
</script>