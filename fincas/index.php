<!DOCTYPE html>
<html>
<head>
	<title>Fincas</title>
</head>
<body>
<?php

$db = new SQLite3("../inmobiliaria.db");
$usus = $db->query ("SELECT * FROM fincas;");
?>

<h1>Bienvenido a las Fincas</h1>
<table border= "1px">
	<tr>
		<td>Id</td>
		<td>Ciudad</td>
		<td>Estrato</td>	
		<td>Area</td>
		<td>Precio</td>	
		<td>Editar</td>		

	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['ciudad']; ?></td>
		<td><?php echo $fila['estrato']; ?></td>
		<td> <?php echo $fila['area'] ;?></td>
		<td> <?php echo $fila['precio'] ;?></td>		
		<a href="fincas/modificarfinca.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		<a href="fincas/eliminarfinca.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>