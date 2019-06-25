<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios;

	$datos=array(
		$_POST['idPersona'],
		$_POST['nombre_personaU'],
		$_POST['apellido_personaU'],
		$_POST['telefono_personaU'],
		$_POST['direccion_personaU'],
		$_POST['edad_personaU'],
		$_POST['email_personaU'],
		$_POST['contrasenia_personaU']
				);
	echo $obj->actualizaUsuario($datos);


 ?>