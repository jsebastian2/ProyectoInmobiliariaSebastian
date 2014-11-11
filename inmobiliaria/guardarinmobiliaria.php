<?php

$db = new SQLite3("../inmobiliaria.db");

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];


$db-> exec("INSERT INTO inmobiliarias (ciudad , ciudad ) VALUES('$nombre', '$ciudad')");
if($db) {
	echo "inmobiliaria " . $nombre . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nombre; 
}


?>
	<br /> <br />
<a href="../inmobiliarias.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />