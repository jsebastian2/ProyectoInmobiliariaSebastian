<?php

$db = new SQLite3("../inmobiliaria.db");

$ciudad = $_POST['ciudad'];
$estrato = $_POST['estrato'];
$area = $_POST['area'];
$precio = $_POST['precio'];





$db-> exec("INSERT INTO apartamentos (ciudad , estrato , area , precio  ) VALUES('$ciudad', '$estrato', '$area', '$precio')");
if($db) {
	echo "apartamento en " . $ciudad . " fue creado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $ciudad; 
}


?>
	<br /> <br />
<a href="../apartamentos.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />