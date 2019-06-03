<?php
//$a = array (2, 4, 6, 8);
//$e = array (10, 10, 10, 10);
//echo "suma = " . array_sum($a) . "\n";
//sumasecho $a[0]+$a[1]+$a[2]+$a[3];
//echo $b[0]+$b[1]+$b[2]+$b[3];
//sumas diferentes posiciones echo $a[0]+$b[3];;

//for($b=0;$b<1;$b++){
  //echo $a[$b]+$e[$b];
//

//$suma= array (
  //"Primero" => 15,
  //"Segunda" => 5,
//);

//echo $suma[Primero]+$suma[Segunda];
$Datos = $_POST['Datos '];//en las 3 variables tomas los valores de tu formulario html
$A= array(
  Array("-21","3"),
  Array("3","6"),
  Array("4","1"),
  Array("4","-1"),
  Array("1","2"),
  Array("-1","2"),
  Array("15","-6"),
  Array("-6","-3"));
  for ($i=0; $i<8; $i++) {
    for ($j=0; $j<2; $j++) {

      // code...


  echo $Datos[$i][$j]."";


          }
        }

?>
