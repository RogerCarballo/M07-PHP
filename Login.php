<FORM method="POST" action="Login.php">
	Nombre: <input type="text" name="nombre" /><br />
	Hombre:<input type="radio" name="genero" value="hombre">
	Mujer:<input type="radio" name="genero" value="mujer">
	<br>
	<input type="submit" name="submit"/>
</FORM>

<?php 

	if(isset($_POST["submit"])){
		 $file = fopen("archivo.txt", "a");
		 fwrite($file, $_POST['nombre']."\t".$_POST["genero"]. PHP_EOL);
         fclose($file);
	}
 ?>