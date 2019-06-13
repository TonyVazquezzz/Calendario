<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device=width, user- scalable=yes, initial-scale=1.0 maximun-scale=3.0, minium-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="valda.js"></script>
  </head>
  <body>
  <form class="formulario" action="validar.php" method="post" onsubmit="return validar();">
      <h1>Ingresa</h1>
      <div class="contenedor">



      <div class="input-contenedor">
        <i class="fas fa-envelope"></i>
        <input type="text" id="Correo" name="Correo" required placeholder="Correo Electronico" >
      </div>

      <div class="input-contenedor">
        <i class="fas fa-key"></i>
        <input type="password" id="Contrasena"  name="Contrasena" required placeholder="Contraseñaa">
      </div>

      <input type="submit" value="Entrar" class="button">

      <p>Registrate...<br>
      <a class="link" href="login.html"><u>Registrarse </u></a></p>
      </div>
      </form>
  </body>
</html>
<?php
 if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
 {
    echo "<div class='Error'>Usuario o contraseña invalido </div>";
 }
?>
