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
                    <input type="text" class="form-control" name="cod_subp" placeholder="Código de SubProyecto">
                  </div>
                  <div class="form-group">
                        <select class="form-control" placeholder="Codigo Proyecto">
                                <option>Código #1</option>
                                <option>Código #2</option>
                                <option>Código #3</option>
                        </select>
                  </div>
                <div class="form-group">
                  Fecha Inicial<input type="date" class="form-control" name="fechain_SubP">
                  </div>
                  <div class="form-group">
                  Fecha Final<input type="date" class="form-control" name="fechafin_SubP">
                  </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="avanceG_SubP" placeholder="% de Avance General ">                   </div>
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
                      <td>Codigo SubProyecto</td>
                      <td>Código Proyecto</td>
                      <td>Fecha Inicio</td>
                      <td>Fecha Final</td>
                      <td>Avance General</td>
                       
                    </tr>
                  </thead>
                  <tbody id="facultades">
                      <td>Codigo SubProyecto</td>
                      <td>Código Proyecto</td>
                      <td>Fecha Inicio</td>
                      <td>Fecha Final</td>
                      <td>Avance General</td>
                      
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