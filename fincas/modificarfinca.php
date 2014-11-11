 <!DOCTYPE html>
 <html>
 <head>
 	<title>Editar</title>
 	<meta charset="utf8"/>
 </head>
 <body>
 <h1>Editar</h1>
<?php
$id = $_GET['id'];

$db = new SQLite3("../inmobiliaria.db");
$usu = $db->query ("SELECT * FROM fincas WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action="actualizarfinca.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Ciudad</label>
 	<input type="text" name="ciudad" value="<?php echo $row['ciudad']; ?>">
 	<br/><br/>
 	<label>Estrato</label>
 	<input type="text" name="estrato" value="<?php echo $row['estrato']; ?>">
 	<br /><br/>
 	<label>Area</label>
 	<input type="text" name="area" value="<?php echo $row['area']; ?>">
 	<br/><br/>
 	<label>Precio</label>
 	<input type="text" name="precio" value="<?php echo $row['precio']; ?>">
 	<input type="submit" value="actualizar">

	<a href="../fincas.php"> Atras </a>
 	<br /> <br />
 </form>
 </body>
 </html>  