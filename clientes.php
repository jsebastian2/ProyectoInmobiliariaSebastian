<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
	<meta charset="utf8" />
</head>
<body>
<?php 
$db = new SQLite3('inmobiliaria.db');
$usus = $db->query ("SELECT * FROM tbusuarios;");

?>
<h1 id="titulo3">Nuestros Clientes</h1>

<a href="clientes/crearnuevocliente.php"> Crear nuevo Cliente </a>
<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Editar</td>	
	
	</tr>
<?php
while ( $fila = $usus->fetchArray()) {
?> 
<tr>
	<td><?php echo $fila['id'] ;?></td>
	<td><?php echo $fila['nombre'] ;?></td>
	<td><?php echo $fila['apellido'];?></td>

	<td>
		<a href="clientes/modificarcliente.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="clientes/eliminarcliente.php?id=<?php echo $fila['id']; ?>">Eliminar </a>
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