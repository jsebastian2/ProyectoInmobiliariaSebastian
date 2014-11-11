<!DOCTYPE html>
<html>
<head>
	<title>Inmobiliarias</title>
	<meta charset="utf8" />
</head>
<body>
<?php 
$db = new SQLite3('inmobiliaria.db');
$usus = $db->query("SELECT * FROM inmobiliarias;");

?>
<h1 id="titulo5">Las Mejores Inmobiliarias del País</h1>

<a href="inmobiliaria/crearnuevainmobiliaria.php"> Crear nueva Inmobiliaria </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Ciudad</td>
		<td>Editar</td>	

	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['nombre'] ;?></td>
	<td><?php echo $fila['ciudad'];?></td>

	<td>
		<a href="inmobiliaria/modificarinmobiliaria.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="inmobiliaria/eliminarinmobiliaria.php?id=<?php echo $fila['id']; ?>">Eliminar </a>
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