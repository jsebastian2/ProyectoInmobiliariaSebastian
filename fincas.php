<!DOCTYPE html>
<html>
<head>
	<title>Fincas</title>
	<meta charset="utf8" />
</head>
<body>
<?php 
$db = new SQLite3('inmobiliaria.db');
$usus = $db->query("SELECT * FROM fincas;");

?>
<h1 id="titulo4">Fincas al mejor precio</h1>

<a href="fincas/crearnuevafinca.php"> Crear nueva finca </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Ciudad</td>
		<td>Estrato</td>
		<td>Area</td>
		<td>Precio</td>
		<td>Editar</td>			
	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['ciudad'] ;?></td>
	<td><?php echo $fila['estrato'];?></td>
	<td><?php echo $fila['area'];?></td>
	<td><?php echo $fila['precio'];?></td>

	<td>
		<a href="fincas/modificarfinca.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="fincas/eliminarfinca.php?id=<?php echo $fila['id']; ?>">Eliminar </a>
	</td>
</tr>
<?php  
}
?>
</table>
	<br/><br/>
<a href="index.php"> Atras</a>
 	<br /><br/>
<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">


 	$(document).on('ready', function() {

 		$('.eliminarUsu').on('click', function(){
 			if (!confirm('seguro que desea eliminar?'))
 				return false;
 		})
 	})
 	</script>
</body>
</html>