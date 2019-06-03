<?php

$Correo=$_POST['Correo'];
$Contrasena=$_POST['Contrasena'];


//Conexion
$Contrasena1=password_verify($Contrasena,$Contrasena);
$conn=mysqli_connect("localhost","root","","usuariosreg");

$consulta="SELECT * FROM usu WHERE Correo='$Correo' and Contrasena='$Contrasena'"; //Variables de tus base de datos

echo "$Contrasena1";

$rel=mysqli_query($conn,$consulta);

$fi= mysqli_num_rows($rel);
if ($fi>0){
  header("location:index.html");//Tu pagina
}
else{
  header("location: ingresar.php?fallo=true");//Tu otra pagina si no se encuentrar

}

mysqli_free_result($rel);
mysqli_close($conn);

?>
