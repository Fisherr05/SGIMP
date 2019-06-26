<?php

session_start();

if (isset($_SESSION['email_persona'])) {
  header('Location: /SGIMP/persona.php');
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
  $records = $conn->prepare('SELECT id_persona, email, password FROM persona WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
	$_SESSION['email_persona'] = $results['email'];
	$_SESSION['id_persona']=$results['password'];
	header("Location: /SGIMP/persona.php");
  } else {
	$message = 'Sorry, those credentials do not match';
  }
}

?>