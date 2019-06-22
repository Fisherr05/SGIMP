<?php
    session_start();
    $email=$_SESSION['email_persona'];
    $comen=$_POST['comentario'];
    $est=$_POST['estrellas'];
    $prof=$_POST['profe'];
    
   try 
    {
        require_once('conexion.php');
        $sql="INSERT into calificacion(puntuacion,descripcion) 
        values ('$est','$comen')";


         $result=$conn->query($sql);

         $sql1="INSERT into empleador_calificacion(id_empleador, id_calificacion,id_empleado) 
                                                   SELECT EM.id_empleador, id_calificacion, E.id_empleado
                                                   from empleado E, calificacion C, empleador EM 
                                                   WHERE E.servicio_empleado='$prof' and EM.id_persona in (SELECT id_persona
                                                                                                        from persona
                                                                                                        where email_persona='$email')";
         $conn->query($sql1);
    } catch (Exception $e) {
    $error = $e->getMessage();
    }
    header("Location: detalles_servicio.php?profesion=$prof");
?>