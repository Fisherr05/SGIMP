<?php 
	session_start();
	if(isset($_SESSION['email_persona'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>

</head>
<body>


</body>
</html>
<?php 
	}else{
		session_unset();
   		 session_destroy();
		header("location:../index.php");
	}
 ?>