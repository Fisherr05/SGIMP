<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'dbDetalles.php';
        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) {
            die('Error de Conexión (' . $conn->connect_errno . ') '
                    . $conn->connect_error);
        }
//echo 'Éxito... ' . $mysqli->host_info . "\n";

//$mysqli->close();
        ?> 
    </body>
</html>
