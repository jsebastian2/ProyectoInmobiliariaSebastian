<?php

$db = new SQLite3("../inmobiliaria.db");

$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$estrato = $_POST['estrato'];
$area = $_POST['area'];
$precio = $_POST['precio'];


$consulta = 'UPDATE apartamentos SET id="'.$id.'" , ciudad="'.$ciudad.'" , estrato="'.$estrato.'" , area="'.$area.'" , precio="'.$precio.'"  WHERE id= "'.$id.'"; ';

$result = $db-> exec ($consulta);


if($result){
	echo $id ."Fue modificado satisfactoriamente.";

}else {

	echo "error al modificar a" . $id ;
}
?>
	<br /> <br />
<a href="../apartamentos.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />

