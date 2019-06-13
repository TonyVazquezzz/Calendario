<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
    <script src="JS/jquery.min.js"></script>
    <meta name="viewport" content="width=device=width, user- scalable=yes, initial-scale=1.0 maximun-scale=3.0, minium-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <h2><center>Full Calendar</center></h2>
  <body>

  <form class="formulario" action="validar.php" method="post" onsubmit="javascript:return Validar(this);">
      <h1>Ingresar</h1>

      <div class="contenedor">



      <div class="input-contenedor">
        <i class="fas fa-envelope"></i>
        <input type="text" id="Correo" name="Correo" required placeholder="Correo Electronico" onblur="javascript:Validar();" >
      </div>

      <div class="input-contenedor">
        <i class="fas fa-key"></i>
        <input type="password" id="Contrasena"  name="Contrasena" required placeholder="Contraseña">
      </div>

      <input type="submit" value="Entrar" class="button"><br><br>
<center>
<div id="alert">Hola</div><br>
      <a class="link" href="login.html"><u>Registrarse </u></a></p>
      </div>
      </form>
      <script type="text/javascript">

      //function Jalidar(){

	//Almacenamos los valores
	//Nombre=$('#Nombre').val();

   //Comprobamos la longitud de caracteres
	//if (Nombre.length<6){
    //$('#alert').html('Por favor escribe un nombre').slideDown(500);
    //$('#Nombre').focus();
		//return true;
	//}
	//else {
		//$('#alert').html('').slideUp(300);
		//return false;

	//}
        function Validar(){
        var Nombre = document.getElementById('Nombre').value;
        var Correo = document.getElementById('Correo').value;
        var Contrasena = document.getElementById('Contrasena').value;
        var Contrasena1 = document.getElementById('Contrasena1').value;



        if(Validador(Correo)==false){
            $('#alert').html('Ingresa un email Valido').slideDown(500);
            $('#Correo').focus();
            return false;
        }
        else {
        $('#alert').html('').slideUp(300);
        }

 }

      </script>
      <div id="dos"></div>
  </body>
</html>
<?php
 if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
 {
    echo "<div class='Error'>Usuario o contraseña invalido </div>";
 }
?>
