<?php
	$id= $_GET['id'];
        try {
            require_once('conexion.php');

            $sql5="DELETE from empleado
                            where id_persona in (SELECT id_persona
                                                            from persona_servicio
                                                            where id_servicio = '$id'";
            $conn->query($sql5);


            $sql2="DELETE from persona_servicio
                            where id_servicio='$id'";
            $conn->query($sql2);
  
  


            $sql="DELETE from SERVICIO where id_servicio = '$id'";
            $result=$conn->query($sql);

            $sql3="DELETE from historial
                        where id_historial in (SELECT id_historial
                                                from persona_historial
                                                where id_persona in (SELECT id_persona
                                                                        from persona
                                                                        where id_persona in (SELECT id_persona
                                                                                                from persona_servicio
                                                                                                    where id_servicio='$id'))) ";
            $conn->query($sql3);


            $sql4="DELETE from persona_historial
                                where id_persona in (SELECT id_persona
                                                                        from persona
                                                                        where id_persona in (SELECT id_persona
                                                                                                from persona_servicio
                                                                                                    where id_servicio='$id'))";
            $conn->query($sql4);




        } catch (Exception $e) {
            $error = $e->getMessage();
        }
	
	header("Location: eliminar_servicio.php");
?>
