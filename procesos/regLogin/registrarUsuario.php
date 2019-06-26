<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['cedula'],
		$_POST['password'],
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['email'],
		$_POST['telefono'],
		$_POST['direccion']
				);

	echo $obj->registroUsuario($datos);

 ?>