<?php

session_start();

if (isset($_SESSION['email_persona'])) {
  header('Location: /webapp4/SGIMP/persona.php');
}
$server = 'localhost';
$username = 'user4';
$password = 'fibeca0596';
$database = 'baseapp4';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}



if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id_persona, email, password FROM persona WHERE email = :email and password =:password');
  $records->bindParam(':email', $_POST['email']);
  $records->bindParam(':password', $_POST['password']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 ) {
	$_SESSION['email_persona'] = $results['email'];
        $email=$results['email'];
	$_SESSION['id_persona']=$results['password'];
        $password=$results['password'];
        if($results['email']=='admin'){
            $records=$conn->prepare("INSERT into inicio_sesion(contrasenia)values(:password) ");
            $records->bindParam(':password',$password);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC); 
            if($email=='admin'){
					header("Location: /webapp4/SGIMP/admin.php");
				}
        }
	header("Location: /webapp4/SGIMP/persona.php"); 
  } else {
	$message = 'Lo siento, las credenciales no coinciden';
  }
}

?>