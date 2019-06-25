<?php 
session_start();
if(isset($_SESSION['email_persona'])){

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Servicios</title>
		<?php require_once "menu.php"; ?>
		<?php require_once "../clases/Conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT *
		from servicio";
		$result=mysqli_query($conexion,$sql);
		?>
	</head>
	<body>
	<div class="container">
		
			<h1>Servicios</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmArticulos" enctype="multipart/form-data">
						<select class="form-control input-sm" id="tipo_servicio" name="tipo_servicio">
							<option value="A">Tipo de servicio </option>
							<?php while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[3] ?>"><?php echo $ver[3]; ?></option>
							<?php endwhile; ?>
						</select>
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="descripcion_servicio" name="descripcion_servicio">
						<label>Disponibilidad</label>
						<input type="text" class="form-control input-sm" id="disponibilidad_servicio" name="disponibilidad_servicio">
						<p></p>
						<span id="btnAgregaArticulo" class="btn btn-primary">Agregar</span>
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tablaArticulosLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->
		
		<!-- Modal -->
		<div class="modal fade" id="abremodalUpdateArticulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Servicio</h4>
					</div>
					<div class="modal-body">
						<form id="frmArticulosU" enctype="multipart/form-data">
							<input type="text" id="idservicio" hidden="" name="idservicio">

							<select  class="form-control input-sm" id="tipo_servicioU" name="tipo_servicioU">
								<option value="A">Selecciona Servicio</option>
								<?php 
								$sql="SELECT id_servicio,tipo_servicio
								from servicio";
								$result=mysqli_query($conexion,$sql);
								?>
								<?php while($ver=mysqli_fetch_row($result)): ?>
									<option value="<?php echo $ver[1] ?>"><?php echo $ver[1]; ?></option>
								<?php endwhile; ?>
							</select>
							<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="descripcion_servicioU" name="descripcion_servicioU">
						<label>Disponibilidad</label>
						<input type="text" class="form-control input-sm" id="disponibilidad_servicioU" name="disponibilidad_servicioU">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaarticulo" type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

	<script type="text/javascript">
		function agregaDatosArticulo(idservicio){
			$.ajax({
				type:"POST",
				data:"id_servicio=" + idservicio,
				url:"../procesos/articulos/obtenDatosArticulo.php",
				success:function(r){
					
					dato=jQuery.parseJSON(r);
					$('#idservicio').val(dato['id_servicio']);
					$('#descripcion_servicioU').val(dato['descripcion_servicio']);
					$('#disponibilidad_servicioU').val(dato['disponibilidad_servicio']);
					$('#tipo_servicioU').val(dato['tipo_servicio']);
				}
			});
		}

		function eliminaArticulo(idservicio){
			alertify.confirm('¿Desea eliminar este servicio?', function(){ 
				$.ajax({
					type:"POST",
					data:"id_servicio=" + idservicio,
					url:"../procesos/articulos/eliminarArticulo.php",
					success:function(r){
						if(r==1){
							$('#tablaArticulosLoad').load("articulos/tablaArticulos.php");
							alertify.success("Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar :(");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaarticulo').click(function(){

				datos=$('#frmArticulosU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/articulos/actualizaArticulos.php",
					success:function(r){
						if(r==1){
							$('#tablaArticulosLoad').load("articulos/tablaArticulos.php");
							alertify.success("Actualizado con exito :D");
						}else{
							alertify.error("Error al actualizar :(");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaArticulosLoad').load("articulos/tablaArticulos.php");

			$('#btnAgregaArticulo').click(function(){

				vacios=validarFormVacio('frmArticulos');

				if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}

				var formData = new FormData(document.getElementById("frmArticulos"));

				$.ajax({
					url: "../procesos/articulos/insertaArticulos.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

					success:function(r){
						
						if(r == 1){
							$('#frmArticulos')[0].reset();
							$('#tablaArticulosLoad').load("articulos/tablaArticulos.php");
							alertify.success("Agregado con exito :D");
						}else{
							alertify.error("Fallo al subir el archivo :(");
						}
					}
				});
				
			});
		});
	</script>

	<?php 
}else{
	session_unset();
   	session_destroy();
	header("location:../index.php");
}
?>