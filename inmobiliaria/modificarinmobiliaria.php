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
$usu = $db->query ("SELECT * FROM inmobiliarias WHERE id='$id';");

$row = $usu -> fetchArray();


?>
 <form  action="actualizarinmobiliaria.php" method="POST">
 	<label>id:</label><label><?php echo $id ; ?></label>
 	<br><br/>
 	<input type="hidden" name="id" value="<?php echo $id ; ?>">
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
 	<br/><br/>
 	<label>Ciudad</label>
 	<input type="text" name="ciudad" value="<?php echo $row['ciudad']; ?>">
 	<input type="submit" value="actualizar">

	<a href="../inmobiliarias.php"> Atras </a>
 	<br /> <br />
 </form>
 </body>
 </html>  