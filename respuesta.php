<?php 	
	require 'user.php';
	$correo = $_POST['Correo'];
	$contra = $_POST['Contrasena'];
		$oUser = new User;
		$oUser->create($correo, $contra);
		//si manda error 500 hay que descomentar la ultima linea 
		//echo "<script>alert('El registro fue completado exitosamente');</script>"
		//header("Location: index.php");
 ?>
  