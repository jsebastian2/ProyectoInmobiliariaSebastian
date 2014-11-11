<?php


$db = new SqLite3("../inmobiliaria.db");

$codigo = $_GET['id'];

$eliminar = $db-> exec("DELETE FROM tbusuarios WHERE id =$codigo");

if ($eliminar ){
	echo "Eliminado correctamente.";

}else{
	echo "No se eliminó. " . SqLite3:: lastErrorMsg();
}

?>

	<br /> <br />
<a href="..//clientes.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
