<?php
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "user"; //El usuario que acabamos de crear en la base de datos
$contrasenha = "fibeca0596"; //La contraseña del usuario que utilizaremos
$basededatos = "workonline"; //El nombre de la base de datos
$dsn = 'mysql:dbname=workonline;host=localhost';
$id_servicio="5";
//$conexion = mysqli_connect( $servidor, $usuario,$contrasenha);
$conexion = mysqli_connect( $servidor, $usuario,$contrasenha) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos )or die ( "Upps!No se ha podido conectar a la base de datos" );
/*
$consulta = "SELECT * FROM INICIO_SESION";

$resultado = mysqli_query( $conexion, $consulta )or die ( "Algo anda mal con la consulta" );

echo "<table borde='2'>";
echo "<tr>";
echo "<th>id_usuario</th>";
echo "<th>contrasenia</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['id_usuario'] . "</td><td>" . $columna['contrasenia'] . "</td>";
	echo "</tr>";
}
echo"</table>";

//insertar datos PDO evitar inyecciones


try{
    $con = new PDO($dsn, $usuario, $contrasenha);
    echo 'Conexion OK';
    $sentencia = $con->prepare("INSERT INTO INICIO_SESION (id_usuario, contrasenia) VALUES(:id_usuario, :contrasenia)");
    $sentencia->bindParam(':id_usuario', $_POST['id_usuario']);
    $sentencia->bindParam(':contrasenia', $_POST['contrasenia']);
    $sentencia->execute();  
}catch(PDOException $e){
    echo 'Fallo la conexion:'.$e->GetMessage();
}
//--------------------------------------------------------------------------------
//-----------------ingresar nuevo Servicio------------
/*
try{
    $servicio = new PDO($dsn, $usuario, $contrasenha);
    echo 'Conexion OK';
    $sentencia = $servicio->prepare("INSERT INTO SERVICIO (descripcion_servicio, disponibilidad_servicio, tipo_servicio) VALUES(:descripcion_servicio, :disponibilidad_servicio, :tipo_servicio)");
    $sentencia->bindParam(':descripcion_servicio', $_POST['descripcion_servicio']);
    $sentencia->bindParam(':disponibilidad_servicio', $_POST['disponibilidad_servicio']);
    $sentencia->bindParam(':tipo_servicio', $_POST['tipo_servicio']);
    $sentencia->execute();  
}catch(PDOException $e){
    echo 'Fallo la conexion:'.$e->GetMessage();
}*/
?>