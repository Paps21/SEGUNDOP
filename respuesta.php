<?php 	
	require "user.php" 
	$nombre = $_POST['Correo'];
	$email = $_POST['Contrasena'];
	$oUser = new User;
	$oUser->create($nombre, $email);
 ?>
