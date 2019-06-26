<?php
session_start();
    if (isset($_SESSION['email_persona'])&&isset($_SESSION['id_persona'])) {
        header('Location: persona.php');
      }
    $email=$_POST['email'];
    
  try {
    require_once 'conexion.php';
    $sql="SELECT * 
        from PERSONA 
        where EMAIL='$email'";
    $result=$conn->query($sql);
    $row=$result->fetch_array();
    $message = '';
    if(mysqli_num_rows($result) > 0 && password_verify($_POST['password'], $row[2]) ){
        $_SESSION['email_persona']=$row[5];
        $_SESSION['id_persona']=$row[0];
        /*$sql2="INSERT into inicio_sesion(password)
                                        values('$row[2]') ";
        mysqli_query($conexion,$sql2);
        
        if($row["email_persona"]=='admin'){
            return 1;
        }else{
            return 2;
        }
        */
    }else{

        $message = 'Lo sentimos, las creedenciales no coinciden';
    }
} catch (Exception $e) {
    $error=$e->getMessage();
}







?>