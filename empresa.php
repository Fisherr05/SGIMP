<?php 
	session_start();
	if(isset($_SESSION['email_persona'])){
		
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require_once "layout.php"; ?>

    <div class="row">
      <div class="container">
        <div class="row p-4">
        <div class="col-md-5">
      <div class="card card-body">
      <form action="{{url_for('añadir_estudiante')}}" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" name="cod_emp" placeholder="Código de la Empresa">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nom_emp" placeholder="Nombre de la Empresa">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" name="email_emp" placeholder="Email de la Empresa">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="web_emp" placeholder="Web de la  Empresa">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="direc_emp" placeholder="Dirección de la  Empresa">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="descrip_emp" placeholder="Descricpión de la  Empresa">
                  </div>
                  <button class="btn btn-primary btn-block">
                    Guardar
                  </button>
                </form>
      </div>
    </div>
    <div class="col-md-7">
    <table class="table table-striped table-hover table-bordered table-sm bg-white">
                  <thead>
                    <tr>
                      <td>Código</td>
                      <td>Nombre</td>
                      <td>Email</td>
                      <td>Página Web</td>
                      <td>Dirección</td>
                      <td>Descripción</td>
                                         
                    </tr>
                  </thead>
                  <tbody id="facultades">
                     <td>Código</td>
                      <td>Nombre</td>
                      <td>Email</td>
                      <td>Página Web</td>
                      <td>Dirección</td>
                      <td>Descripción</td>
                        <td>
                        <a href="#" class="btn btn-secondary">editar</a>
                      </td>
                      <td>
                        <a href="#" class="btn btn-danger btn-delete">borrar</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
    
</body>
</html>
<?php 
	}else{
		session_unset();
   		 session_destroy();
		header("location:login.php");
	}
 ?>