<?php
// 1) Conexión
$conn=new mysqli("localhost","root","","workonline");
$sql = "SELECT *  FROM persona";
$result=$conn->query($sql);
$fila = $result->fetch_array();
					echo "<p>";
					echo $fila ["id_persona"];
					echo "-"; // un separador 
					echo $fila["nombre_persona"];
					echo "-"; // un separador
					echo $fila ["email_persona"];
					echo "-"; // un separador
					echo $fila["edad_persona"];
					echo "</p>";
					

?>