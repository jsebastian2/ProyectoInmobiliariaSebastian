<!DOCTYPE html>
<html>
<head>
	<title>Apartamentos</title>
	<meta charset="utf8" />
</head>
<body>
<?php 
$db = new SQLite3('inmobiliaria.db');
$usus = $db->query("SELECT * FROM apartamentos;");

?>
<h1 id="titulo1">Apartamentos al mejor precio</h1>

<a href="apartamentos/crearnuevoapartamento.php"> Crear nuevo Apartamento </a>
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
		<a href="apartamentos/modificarapartamentos.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="apartamentos/eliminarapartamentos.php?id=<?php echo $fila['id']; ?>">Eliminar </a>
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

<a href="index.php"> Volver Pagina Principal </a>
 	<br /> <br />