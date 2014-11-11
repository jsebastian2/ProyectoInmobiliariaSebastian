<html>
<head>
	<title>Modificar Cliente</title>

</head>
<body>

<h1>Modificar Cliente</h1>

<?php

$id = $_GET['id'];

$db = new SQLite3("../inmobiliaria.db");
$usu = $db->query ("SELECT * FROM tbusuarios WHERE id='$id';");

$row = $usu->fetchArray();

?>

<form action="actualizarcliente.php" method="POST">
	<label>Id:</label><label> <?php echo $id; ?></label>
<br /> <br />

	<input type="hidden" name="id" value="<?php echo $id;?>">

	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $row ['nombre']; ?>">
	<br/>
	<label>Apellido</label>
	<input type="text" name="apellido" value="<?php echo $row ['apellido']; ?>">

	<input type="submit" value="Actualizar">

<br/>
</form>	

</body>
</html>

<a href="index.php">Volver</a>

