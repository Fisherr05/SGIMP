<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['nombre_persona'],
		$_POST['apellido_persona'],
		$_POST['telefono_persona'],
		$_POST['direccion_persona'],
		$_POST['email_persona'],
		$_POST['edad_persona'],
		$_POST['contrasenia_persona']
				);

	echo $obj->registroUsuario($datos);

 ?>