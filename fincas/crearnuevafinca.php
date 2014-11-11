 <!DOCTYPE html>
 <html>
 <head>
 	<title>Fincas</title>
 </head>
 <body>
  <h1>Crear Nueva Finca</h1>
  
 <form action="guardarfinca.php" method="POST">

 	<label>Ciudad</label>
 	<input type="text" name="ciudad">
 	<br/><br/>
	<label>Estrato</label>
 	<input type="text" name="estrato">
 	<br/><br/>
	<label>Area</label>
 	<input type="text" name="area">
 	<br/><br/>
	<label>Precio</label>
 	<input type="text" name="precio">
 	<input type="submit" value="guardar">
 	<br /><br/>
	<a href="../fincas.php"> Atras </a>
 	<br /> <br />
 </form>
 
 </body>
 </html>  