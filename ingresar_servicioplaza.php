
<?php
	session_start();
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //El usuario que acabamos de crear en la base de datos
$contrasenha = ""; //La contraseña del usuario que utilizaremos
$basededatos = "workonline"; //El nombre de la base de datos
$dsn = 'mysql:dbname=workonline;host=localhost';

$conexion = mysqli_connect( $servidor, $usuario,$contrasenha);
$conexion = mysqli_connect( $servidor, $usuario,$contrasenha) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos )or die ( "Upps!No se ha podido conectar a la base de datos" );
$email=$_SESSION['email_persona'];
$fecha=date("Y-m-d");


try{
    $servicio = new PDO($dsn, $usuario, $contrasenha);
    //echo 'Conexion OK';
    $sentencia = $servicio->prepare("INSERT INTO SERVICIO (descripcion_servicio, disponibilidad_servicio, tipo_servicio) VALUES(:descripcion_servicio, :disponibilidad_servicio, :tipo_servicio)");

    $sentencia->bindParam(':descripcion_servicio', $_POST['descripcion_servicio']);
    $sentencia->bindParam(':disponibilidad_servicio', $_POST['disponibilidad_servicio']);
    $sentencia->bindParam(':tipo_servicio', $_POST['tipo_servicio']);
    $sentencia->execute(); 

     $des=$_POST['descripcion_servicio'];
   $sql2=$servicio->prepare("INSERT into persona_servicio(id_persona, id_servicio)
												SELECT id_persona,S.id_servicio
												from servicio S, persona P
												where S.descripcion_servicio='$des' and P.email_persona= '$email' ");
	$sql2->execute(); 


$sql3=$servicio->prepare("INSERT into historial(fecha_historial)
											values('$fecha') ");
			$sql3->execute(); 

			$sql4=$servicio->prepare("INSERT into persona_historial(id_persona,
												id_historial)
												SELECT id_persona,H.id_historial
												from historial H, persona P
												where H.fecha_historial='$fecha' and P.email_persona= '$email' ");
			$sql4->execute(); 

			$sql5=$servicio->prepare("INSERT into empleador(plaza_laboral_empleador,
												id_persona)
												SELECT S.tipo_servicio,id_persona
												from servicio S, persona P
												where S.descripcion_servicio='$des' and P.email_persona= '$email'");
			$sql5->execute(); 



}catch(PDOException $e){
    echo 'Fallo la conexion:'.$e->GetMessage();
}
header("Location: ingresar_servpla.php");
?>

