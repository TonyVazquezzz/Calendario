<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=sistema;localhost","root","");

$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
  case 'agregar':
    // Agregadp
       $sentenciaSQL = $pdo->prepare("INSERT INTO eventos (title,descripcion,color,textColor,start,endd)
       VALUES(:title,:descripcion,:color,:textColor,:start,:endd)");

       $respuesta=$sentenciaSQL ->execute(array(
         "title" => $_POST['title'],
         "descripcion" => $_POST['descripcion'],
         "color" => $_POST['color'],
         "textColor" => $_POST['textColor'],
         "start" => $_POST['start'],
         "endd" => $_POST['endd']
       ));
  echo json_encode($respuesta);
    break;
  case 'eliminar':
  //Eliminar
  // echo "Eliminar";
$respuesta=false;
if(isset($_POST['id'])){

  $sentenciaSQL= $pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
  $respuesta= $sentenciaSQL->execute(array("ID"=>$_POST['id']));
}
echo json_encode($respuesta);
    break;

  case 'modificar':
 //Modificar
    $sentenciaSQL = $pdo->prepare("UPDATE eventos SET
    title=:title,
    descripcion=:descripcion,
    color=:color,
    textColor=:textColor,
    start=:start,
    endd=:endd
    WHERE ID=:ID
    ");

    $respuesta=$sentenciaSQL ->execute(array(
      "ID" =>$_POST['id'],
      "title" => $_POST['title'],
      "descripcion" => $_POST['descripcion'],
      "color" => $_POST['color'],
      "textColor" => $_POST['textColor'],
      "start" => $_POST['start'],
      "endd" => $_POST['endd']
    ));
    echo json_encode($respuesta);
    break;
  default:
        $sentenciaSQL= $pdo->prepare("SELECT * FROM eventos");
        $sentenciaSQL->execute();

        $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);  // code...
    break;
}


  ?>
