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
        return true;
      } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }
  }
  ?>