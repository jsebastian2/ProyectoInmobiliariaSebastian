<?php

$db = new SQLite3("../inmobiliaria.db");
$codigo = $_GET['id'];
$eliminar = $db-> exec("DELETE FROM fincas WHERE Id=$codigo");


if ($eliminar ) {

	echo " finca eliminada correctamente. ";
}else{
	echo "no se pudo eliminar. ". $db->lastErrorMsg();

}


?>
	<br /> <br />
<a href="..//fincas.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
























