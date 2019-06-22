<?php 
	session_start();
	$iduser=$_SESSION['id_persona'];
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Articulos.php";

	$obj= new articulos();

	$datos=array(
			    $_POST['tipo_servicio'],
	    $_POST['descripcion_servicio'],
	    $_POST['disponibilidad_servicio']
			);

	echo $obj->insertaArticulo($datos);

 ?>