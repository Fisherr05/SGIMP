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
            <div class="card">
              <div class="card-body">
                <!-- FORM TO ADD TASKS -->
                <form action="{{url_for('añadir_estudiante')}}" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" name="cod_act" placeholder="Código de Actividad">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="n" placeholder="SELECT COMPONENTE"> <!--aqui va un select-->
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nombre_act" placeholder="Nombre de Actividad">
                  </div>
                  <div class="form-group">
                    <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Observaciones"></textarea>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="n" placeholder="SELECT ESTADO"> <!--aqui va un select-->
                  </div>
                  <button class="btn btn-primary btn-block">
                    Guardar
                  </button>
                </form>
              </div>
            </div>
          </div>


          <!-- TABLE  -->
          <div class="col-md-7">

              <form class="form-inline my-2 my-lg-0 ml-auto">
                  <input name="search" id="search" class="form-control  bg-white col-md-6" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <br>
              <div class="card my-4" id="task-result">
                <div class="card-body">
                  <!-- SEARCH -->
                  <ul id="container"></ul>
                </div>
              </div>
                <table class="table table-striped table-hover table-bordered table-sm bg-white">
                  <thead>
                    <tr>
                      <td>Id</td>
                      <td>Componente</td>
                      <td>Nombre Actividad</td>
                      <td>Observaciones</td>
                      <td>Estado</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                      
                    </tr>
                  </thead>
                  <tbody id="facultades">
                    <tr>
                    <td>Id</td>
                      <td>Componente</td>
                      <td>Nombre Actividad</td>
                      <td>Observaciones</td>
                      <td>Estado</td>
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
</body>
</html>
<?php 
	}else{
		session_unset();
   		 session_destroy();
		header("location:login.php");
	}
 ?>