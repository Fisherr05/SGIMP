<?php 
session_start();
if(isset($_SESSION['email_persona']) and $_SESSION['email_persona']=='admin'){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>usuarios</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Administrar usuarios</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmRegistro">

							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre_persona" id="nombre_persona">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido_persona" id="apellido_persona">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" name="telefono_persona" id="telefono_persona">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" name="direccion_persona" id="direccion_persona">
							<label>edad</label>
							<input type="text" class="form-control input-sm" name="edad_persona" id="edad_persona">
							<label>Email</label>
						    <input type="text" class="form-control input-sm" name="email_persona" id="email_persona" placeholder="google@gmail.com">
							<label>Password</label>
							<input type="Password" class="form-control input-sm" name="contrasenia_persona" id="contrasenia_persona">
						
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>

					</form>
				</div>
				<div class="col-sm-7">
					<div id="tablapersonaLoad"></div>
				</div>
			</div>
		</div>


		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="actualizaUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Usuario</h4>
					</div>
					<div class="modal-body">
						<form id="frmRegistroU">
							<input type="text" hidden="" id="idPersona" name="idPersona">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre_personaU" id="nombre_personaU" value="">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido_personaU" id="apellido_personaU">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" name="telefono_personaU" id="telefono_personaU">
							<label>Direccion</label>
							<input type="text" class="form-control input-sm" name="direccion_personaU" id="direccion_personaU">
							<label>edad</label>
							<input type="text" class="form-control input-sm" name="edad_personaU" id="edad_personaU">
							<label>Email</label>
						    <input type="text" class="form-control input-sm" name="email_personaU" id="email_personaU" placeholder="google@gmail.com">
							<label>Password</label>
							<input type="Password" class="form-control input-sm" name="contrasenia_personaU" id="contrasenia_personaU">

						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaUsuario" type="button" class="btn btn-warning" data-dismiss="modal">Actualiza Usuario</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

	<script type="text/javascript">
		function agregaDatosUsuario(id_persona){

			$.ajax({
				type:"POST",
				data:"id_persona=" + id_persona,
				url:"../procesos/usuarios/obtenDatosUsuario.php",
				success:function(r){
					dato=jQuery.parseJSON(r);

					$('#idPersona').val(dato['id_persona']);
					$('#nombre_personaU').val(dato['nombre_persona']);
					$('#apellido_personaU').val(dato['apellido_persona']);
					$('#email_personaU').val(dato['email_persona']);
					$('#contrasenia_personaU').val(dato['contrasenia_persona']);
					$('#telefono_personaU').val(dato['telefono_persona']);	
					$('#direccion_personaU').val(dato['direccion_persona']);
					$('#edad_personaU').val(dato['edad_persona']);

				}
			});
		}

		function eliminarUsuario(id_persona){
			alertify.confirm('¿Desea eliminar este usuario?', function(){ 
				$.ajax({
					type:"POST",
					data:"id_persona=" + id_persona,
					url:"../procesos/usuarios/eliminarUsuario.php",
					success:function(r){
						if(r==1){
							$('#tablapersonaLoad').load('usuarios/tablaUsuarios.php');
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
			$('#btnActualizaUsuario').click(function(){

				datos=$('#frmRegistroU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/usuarios/actualizaUsuario.php",
					success:function(r){

						if(r==1){
							$('#tablapersonaLoad').load('usuarios/tablaUsuarios.php');
							alertify.success("Actualizado con exito :D");
						}else{
							alertify.error("No se pudo actualizar :(");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#tablapersonaLoad').load('usuarios/tablaUsuarios.php');

			$('#registro').click(function(){

				vacios=validarFormVacio('frmRegistro');

				if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}

				datos=$('#frmRegistro').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/regLogin/registrarUsuario.php",
					success:function(r){
						//alert(r);

						if(r==1){
							$('#frmRegistro')[0].reset();
							$('#tablapersonaLoad').load('usuarios/tablaUsuarios.php');
							alertify.success("Agregado con exito");
						}else{
							alertify.error("Fallo al agregar :(");
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