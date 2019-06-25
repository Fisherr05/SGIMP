<?php 
session_start();
if(isset($_SESSION['email_persona'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Historial</title>
		<?php require_once "menu.php"; ?>
		<?php require_once "../clases/Conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT H.id_historial,H.fecha_historial,nombre_persona, apellido_persona, S.descripcion_servicio
		from historial H, persona_historial PH, persona P, servicio S, persona_servicio PS
		where H.id_historial=PH.id_historial and PH.id_persona=P.id_persona and P.id_persona=PS.id_persona and PS.id_servicio=S.id_servicio";
		$result=mysqli_query($conexion,$sql);

		?>
	</head>
	<body>
	<div class="container">
			
			<h1>Historial uso del sistema</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmHistorial" enctype="multipart/form-data">
						<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
						<caption><label>Historial de uso del Sistema</label></caption>
						<tr>
							<td>#</td>
							<td>Fecha de Acceso al Sistema</td>
							<td>Usuario que accedio</td>
							<td>Tipo de servicio</td>

						</tr>
					<?php
					while($row = $result->fetch_array()) {

				    ?>
			        <tr>
			        	<td> <?php echo $row["id_historial"]; ?></td>
			        	<td> <?php echo $row["fecha_historial"]; ?></td>
			        	<td> <?php echo $row["nombre_persona"]." ".$row["apellido_persona"]; ?></td>
			        	<td> <?php echo $row["descripcion_servicio"]; ?></td>
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