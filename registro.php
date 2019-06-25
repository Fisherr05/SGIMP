<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
  </head>
  <body style="background-image:url(img/fondoRG.jpg)">
  <?php require_once "barra.php"; ?>
    <div class="container">
		<div class="row p-4">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 bg-white border border-secondary">
				<div class="panel panel-danger card-body">
					<div class="panel panel-heading" align="center"><h2>Registro</h2></div>
					<div class="panel panel-body">
						<form id="frmRegistro">
              <input type="text" class="form-control input-sm" name="cedula" id="cedula" placeholder="Ingrese su cédula">
              <input type="Password" class="form-control input-sm" name="password1" id="password1" placeholder="Ingrese su Contraseña">
              <input type="Password" class="form-control input-sm" name="password2" id="password2" placeholder="Ingrese nuevamente su Contraseña">
              <input type="text" class="form-control input-sm" name="nombre" id="nombre" placeholder="Ingrese un nombre">
              <input type="text" class="form-control input-sm" name="apellido" id="apellido" placeholder="Ingrese un apellido">
              <input type="text" class="form-control input-sm" name="email" id="email" placeholder="Ingrese un correo electrónico">
							<input type="text" class="form-control input-sm" name="telefono" id="telefono" placeholder="Ingrese su telefono">
							<input type="text" class="form-control input-sm" name="direccion" id="direccion" placeholder="Ingrese su dirección">			
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<a href="login.php" class="btn btn-default">Regresar login</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--Bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>