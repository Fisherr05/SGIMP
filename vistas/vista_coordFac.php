<?php 
	session_start();
	if(isset($_SESSION['email_persona'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	

</head>
<body>
		<?php require_once "menu_coordFac.php"; ?>

</body>
</html>
<?php 
	}else{
		session_unset();
   		 session_destroy();
		header("location:login.php");
	}
 ?>