<?php

$db = new SQLite3("../inmobiliaria.db");
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];

$db-> exec("INSERT INTO tbusuarios (nombre , apellido ) VALUES('$nom', '$ape')");
if($db) {
	echo "cliente " . $nom . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
	<br /> <br />
<a href="../clientes.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />