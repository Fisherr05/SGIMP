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
                    <input type="text" class="form-control" name="ced_per" placeholder="Cédula">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="cod_rolPer" placeholder="Código del Rol">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="pass_per1" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nom_per" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="ape_per" placeholder="Apellido">
                  </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email_per" placeholder="Email">
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="tel_per" placeholder="Teléfono">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" name="dir_per" placeholder="Dirección">
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
                      <td>Id</td>
                      <td>Cédula</td>
                      <td>Codigo Rol</td>
                      <td>Contraseña</td>
                      <td>Nombre</td>
                      <td>Apellido</td>
                      <td>Email</td>
                      <td>Telefono</td>
                      <td>Dirección</td>
               
                      
                    </tr>
                  </thead>
                  <tbody id="facultades">
                      <td>Id</td>
                      <td>Cédula</td>
                      <td>Codigo Rol</td>
                      <td>Contraseña</td>
                      <td>Nombre</td>
                      <td>Apellido</td>
                      <td>Email</td>
                      <td>Telefono</td>
                      <td>Dirección</td>
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
