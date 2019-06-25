<?php 


require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";
$id_servicio=$_POST['id_servicio'];

	$obj=new articulos();

	echo $obj->eliminaArticulo($id_servicio);

 ?>