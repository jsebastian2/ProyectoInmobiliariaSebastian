<?php

$db = new SQLite3("../inmobiliaria.db");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];


$consulta = 'UPDATE inmobiliarias SET id="'.$id.'" , nombre="'.$nombre.'" , ciudad="'.$ciudad.'"  WHERE id= "'.$id.'"; ';

$result = $db-> exec ($consulta);


if($result){
	echo $nombre ." Fue modificado satisfactoriamente.";

}else {

	echo "error al modificar a" . $nombre ;
}
?>
	<br /> <br />
<a href="../inmobiliarias.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />

