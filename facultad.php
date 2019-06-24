﻿<!DOCTYPE html>
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
                    <input type="text" class="form-control" name="cod_fac" placeholder="Código de Facultad">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nombre-fac" placeholder="Nombre de Facultad">
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
                      <td>Id_Facultad</td>
                      <td>Nombre</td>
                      <td>Editar</td>
                      <td>Eliminar</td>
                    </tr>
                  </thead>
                  <tbody id="facultades">
                    <tr>
                      <td>Id_Facultad</td>
                      <td>Nombre</td>
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
</body>
</html>