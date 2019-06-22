<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Articulos.php";

	$obj= new articulos();


	$idservicio=$_POST['id_servicio'];

	echo json_encode($obj->obtenDatosArticulo($idservicio));

 ?>