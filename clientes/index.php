<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
<?php

$db = new SQLite3("../inmobiliaria.db");
$usus = $db->query ("SELECT * FROM tbusuarios;");
?>

<h1>Bienvenido a Clientes</h1>
<table border= "1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>	
		<td>Editar</td>	
	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['nombre']; ?></td>
		<td><?php echo $fila['apellido']; ?></td>
		<a href="clientes/modificarcliente.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		<a href="clientes/eliminarcliente.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>