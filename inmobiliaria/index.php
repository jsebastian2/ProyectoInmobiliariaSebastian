<!DOCTYPE html>
<html>
<head>
	<title>Inmobiliarias</title>
</head>
<body>
<?php

$db = new SQLite3("../inmobiliaria.db");
$usus = $db->query ("SELECT * FROM inmobiliarias;");
?>

<h1>Bienvenido a las inmobiliarias</h1>
<table border= "1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Ciudad</td>
	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['nombre']; ?></td>
		<td><?php echo $fila['ciudad']; ?></td>
		<a href="inmobiliarias/modificarinmobiliaria.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="inmobiliarias/eliminarinmobiliaria.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>