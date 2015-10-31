<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOIN US</title>
        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<h1 class="responsive"><center> Your empire needs YOU!</center></h1>
<div class="container" >
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="http://emblemsbf.com/img/28455.jpg" alt="Avatar" class="responsive"/> 
    </button>
    <form action="respuesta.php" method="post"> 
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input name="Correo" type="text" id="fieldUser" class="input" required pattern=.*\S.* />
          <!--<input name="Correo" type="text" id="fieldUser" class="input" required pattern=."^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"required/>-->
          <!--<input name="Correo" type="text" id="fieldUser" class="input" required pattern=."^[a-zA-Z0-9.]+@[a-zA-Z0-9-]+[.com] *$"required/>-->
          

          <label for="fieldUser" class="label">Correo</label>
        </div>
        <div class="field">
          <input name="Contrasena" type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Contraseña</label>
        </div>
        <div class="profile__footer">
          <input type="submit" class="btn">PAPS</button>
        </div>
      </div>
     </div>
   </form>
  </div>
</div>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
