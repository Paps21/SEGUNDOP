<?php
require 'database.php';

Class User{

  public static function create($Correo, $Contrasena) {
    $sql = 'INSERT INTO Usuarios (Correo, Contrasena) VALUES (:Correo,:Contrasena)';
    try {
      $db = Database::connect();
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':Correo', $Correo);
      $stmt->bindParam(':Contrasena', $Contrasena);
      $stmt->execute();
      Database::disconnect();
      echo "<script>alert('Has ingresado al lado oscuro'); location.href='index.php'</script>"; //prueba quitar si manda el error 500
      return true;
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      return false;
    }
  }
}

?>