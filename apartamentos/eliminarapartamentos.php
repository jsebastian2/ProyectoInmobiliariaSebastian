<?php

$db = new SQLite3("../inmobiliaria.db");
$codigo = $_GET['id'];
$eliminar = $db-> exec("DELETE FROM apartamentos WHERE Id=$codigo");


if ($eliminar ) {

	echo " apartamento eliminado correctamente. ";
}else{
	echo "no se pudo eliminar. ". $db->lastErrorMsg();

}


?>
	<br /> <br />
<a href="..//apartamentos.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
























