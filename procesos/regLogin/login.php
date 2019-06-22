<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";
	

	$obj= new usuarios();

	$datos=array(
	$_POST['email_persona'],
	$_POST['contrasenia_persona']
	);

	echo $obj->loginUser($datos);

 ?>