<?php

$link= mysql_connect("localhost","root","") or die ("<h2> No se encuentra el servidor");
$db = mysql_select_db("usuarios",$link) or die ("<h2> Error de conexion </h2>");

//Datos
$Nombre=$_POST['Nombrecompleto'];
$Correo=$_POST['Correoe'];
$Contra=$_POST['Contraseña'];

//Obtenerdatos
$req = (strlen($Nombre) * strlen ($Correo) * strlen($email) or die ("No se han completado los campos");



//Contraseña
$contraseñausuario= md5 ($Contra);

//conexion
mysql_query("INSERT INTO datos VALUES('','$Nombre','$Correo','$Contra')",$link) or die ("Error de datos");

echo '
  <h2> Registro completado </h2>
  <a href="login.html">Logearse</a>

';
 ?>
