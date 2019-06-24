<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>


<body style="background-image:url(img/fondoIC.jpg)">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading" align="center">S   G   I   M   P</div>
					<div class="panel panel-body">
						<p>
							<img src="img/workonline-logo-2xs.png"  height="100">
						</p>
						<form id="frmLogin">
							<label>Usuario</label>
							<input type="text" class="form-control input-sm" name="email_persona" id="email_persona" placeholder="usuario@correo.com">
							<label>Contraseña</label>
							<input type="password" class="form-control input-sm" name="contrasenia_persona" id="contrasenia_persona" placeholder="Contraseña">
							<p></p>
							<span class="btn btn-primary btn-sm" id="entrarSistema">Ingresar</span>

							
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
		$('#entrarSistema').click(function(){

		vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/login.php",
			success:function(r){

				if(r==1){
					window.location="vistas/inicio.php";
				}else{
					if(r==2){
						window.location="perfil.php"
					}else{
						alert("No se pudo acceder usuario o clave incorrecto :(");
					}

				}
			}
		});
	});
	});
</script>
