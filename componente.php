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
                    <input type="text" class="form-control" name="cod_comp" placeholder="Código de Componente">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="n" placeholder="SELECT SUBPROYECTO"> <!--aqui va un select-->
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nombre_comp" placeholder="Nombre de Componente">
                  </div>
                  <div class="form-group">
                  Fecha Inicial<input type="date" class="form-control" name="fechain_comp">
                  </div>
                  <div class="form-group">
                  Fecha Final<input type="date" class="form-control" name="fechafin_comp">
                  </div>
                  <div class="form-group">
                    <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Descripción"></textarea>
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
    <div class="col-md-7">
    <table class="table table-striped table-hover table-bordered table-sm bg-white">
                  <thead>
                    <tr>
                      <td>Id</td>
                      <td>Subproyecto</td>
                      <td>Nombre Componente</td>
                      <td>Observaciones</td>
                      <td>Fecha Inicial</td>
                      <td>Fecha Final</td>
                      <td>Descripción</td>
                      <td>Estado</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                      
                    </tr>
                  </thead>
                  <tbody id="facultades">
                      <td>Id</td>
                      <td>Subproyecto</td>
                      <td>Nombre Componente</td>
                      <td>Observaciones</td>
                      <td>Fecha Inicial</td>
                      <td>Fecha Final</td>
                      <td>Descripción</td>
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
        </div>
      </div>
    </div>
    
</body>
</html>