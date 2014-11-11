<?php

$db = new SQLite3("../inmobiliaria.db") ;

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$consulta = 'UPDATE tbusuarios SET id="'.$id.'" , nombre="'.$nombre.'" , apellido="'.$apellido.'"  WHERE  id="'.$id.'";';

$result = $db-> exec($consulta);

if($result){
	echo $nombre ." fue modificado correctamente.";

}else{
	echo "Error al modificar a ". $nombre;
}

?>

	<br /> <br />
<a href="../clientes.php"> Atras</a>
 	<br /> <br />
<a href="../index.php"> Volver Pagina Principal </a>
 	<br /> <br />
