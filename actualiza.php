<?php
    $id_servicio=$_GET['id_servicio'];
    $descripcion_servicio=$_GET['descripcion_servicio'];
    $disponibilidad_servicio=$_GET['disponibilidad_servicio'];
    $tipo_servicio=$_GET['tipo_servicio'];
    
    try 
    {
        require_once('conexion.php');
        $sql2="UPDATE empleado set servicio_empleado='$tipo_servicio'
                                        where id_persona in (SELECT id_persona
                                                            from persona_servicio
                                                            where id_servicio = '$id_servicio'";
         $conn->query($sql2);
        
        $sql="UPDATE SERVICIO set descripcion_servicio='$descripcion_servicio',disponibilidad_servicio = '$disponibilidad_servicio',tipo_servicio='$tipo_servicio' where id_servicio='$id_servicio'";
         $result=$conn->query($sql);




    } catch (Exception $e) {
    $error = $e->getMessage();
    }
    header("Location: modificar_servicio.php");
?>