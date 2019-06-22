<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

$obj= new articulos();

$datos=array(
		$_POST['idservicio'],
		$_POST['tipo_servicioU'],
	    $_POST['descripcion_servicioU'],
	    $_POST['disponibilidad_servicioU']

			);

    echo $obj->actualizaArticulo($datos);

 ?>