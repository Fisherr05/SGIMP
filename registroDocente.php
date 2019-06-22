<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>

</head>
<body style="background-image:url(img/fondoRG.jpg)">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading" align="center">Registrar Administrador</div>
					<div class="panel panel-body">
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
							<a href="index.php" class="btn btn-default">Regresar login</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Agregado con exito");
					}else{
						alert("Fallo al agregar :(");
					}
				}
			});
		});
	});
</script>
