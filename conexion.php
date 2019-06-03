

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device=width, user- scalable=yes, initial-scale=1.0 maximun-scale=3.0, minium-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="estilos2.css">
    <form action="ingresar.html" method="post">
      <script src="valda.js"></script>

    </form>
  </head>
  <body>
    <form class="formulario" action="conexion.php" method="post" onsubmit="return validar();">
      <h1>Ingresa</h1>

      </div>



      <p>Ingresa directamente<br>
      <a class="link" href="ingresar.php"><u> Iniciar sesion </u></a></p>

<?php

$servidor="localhost";
$usuario="root";
$contrasena="";
$basededatos="usuariosreg";//nombre de la base de datos

$conn=mysqli_connect($servidor, $usuario, $contrasena, $basededatos) or die ("error en la conexion de base de datos");

$Nombre = $_POST['Nombre'];//en las 3 variables tomas los valores de tu formulario html
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Contrasena=password_hash($Contrasena,PASSWORD_DEFAULT);
$insertarr = "INSERT INTO usu (Nombre, Correo, Contrasena) VALUES ('$Nombre','$Correo','$Contrasena')";

$resultado = mysqli_query ($conn, $insertarr) or die ("error al insertar los registros");




//en la linea 16 cambias 'personal' por el nombre de tu tabla, los valores los cambias también.
echo "<div class='Mensajee'> ¡Registrado Correctamente! </div>";

//el echo está solo para confirmar que si se ha procesado.

?>
