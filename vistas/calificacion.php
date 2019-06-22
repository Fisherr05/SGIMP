<?php 
session_start();
if(isset($_SESSION['email_persona'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Calificaciones</title>
		<?php require_once "menu.php"; ?>
		<?php require_once "../clases/Conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT C.id_calificacion,C.puntuacion,C.descripcion,nombre_persona, apellido_persona,E.plaza_laboral_empleador
		from calificacion C, empleador_calificacion EC, empleador E, persona P
		where C.id_calificacion=EC.id_calificacion and EC.id_empleador=E.id_empleador and E.id_persona=P.id_persona";
		$sql2="SELECT nombre_persona,apellido_persona,E.servicio_empleado
		from calificacion C, empleador_calificacion EC, empleado E, persona P
		where C.id_calificacion=EC.id_calificacion and EC.id_empleado=E.id_empleado and E.id_persona=P.id_persona";
		$result2=mysqli_query($conexion,$sql2);
		$result=mysqli_query($conexion,$sql);

		?>
	</head>
	<body>
	<div class="container">
			
			<h1>Calificacion y puntuacion</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmHistorial" enctype="multipart/form-data">
						<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
						<caption><label>Calificaciones</label></caption>
						<tr>
							<th>#</th>
							<th>Puntuacion ?/5</th>
							<th>Descripcion</th>
							<th>Calificador</th>
							<th>Calificado</th>
							<th>Servicio Ofrecido</th>
							<Th>Eliminar</Th>



						</tr>
					<?php
					while(($row = $result->fetch_array()) and ($row2 = $result2->fetch_array())   ) {

				    ?>
			        <tr>
			        	<td> <?php echo $row["id_calificacion"]; ?></td>
			        	<td> <?php echo $row["puntuacion"]; ?></td>
			        	<td> <?php echo $row["descripcion"]; ?></td>
			        	<td> <?php echo $row["nombre_persona"]." ".$row["apellido_persona"]; ?></td>
			        	<td> <?php echo $row2["nombre_persona"]." ".$row2["apellido_persona"]; ?></td>
			            <td> <?php echo $row2["servicio_empleado"]; ?></td>
			      
			            <td><a href='../procesos/calificacion/eliminarcalificacion.php?id=$row[id_calificacion]'><span class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></span></a></td>	

			        	
			        </tr>
			        <?php        
			        }
			        $result->close();
			        ?>
			        </table>
					</form>
				</div>
			</div>
		</div>

	</body>
	</html>



	<?php 
}else{
	session_unset();
   	session_destroy();
	header("location:../index.php");
}
?>