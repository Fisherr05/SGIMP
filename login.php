<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión | SGIMP</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script src="js/funciones.js"></script>
  </head>
  <body  style="background-image:url(img/fondoIC.jpg)">
  <?php require_once "barra.php"; ?>

  <div class="container">
		<div class="row p-4">
			<div class="col-sm-4"></div>
			<div class="col-sm-4  bg-white border border-secondary">
				<div class="panel panel-primary card-body ">
					<div class="panel panel-heading" align="center"></div>
					<div class="panel panel-body">
						<p>
							<img class="img-responsive logo img-thumbnail" src="img/sgimp-logo.png"   height="97">
						</p>
						<form id="frmLogin">
							<input type="email" class="form-control input-sm" name="email_persona" id="email_persona" placeholder="Ingrese su correo">
							<input type="password" class="form-control input-sm" name="contrasenia_persona" id="contrasenia_persona" placeholder="Ingrese su Contraseña">
              <p></p>
			  <span class="btn btn-primary" id="entrarSistema">Ingresar</span>
              <a href="registro.php" class="btn btn-danger ">Registrarse</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
  <p>
  
  <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--Bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
					window.location="vista_coordGEN.php";
				}else{
					if(r==2){
						window.location="persona.php"
					}else{
						alert("No se pudo acceder usuario o clave incorrecto :(");
					}

				}
			}
		});
	});
	});
</script>