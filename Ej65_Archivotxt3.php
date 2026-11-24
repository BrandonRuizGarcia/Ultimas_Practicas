<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
	<h2>Guardar informacion de un archivo</h2>
<form method='POST'>
	nombre del alumno:
    <input type="text" name="nombre">
    <br><br>

	Edad del alumno:
    <input type="number" name="edad">
    <br><br>

    pasatiempo del alumno:
    <input type="text" name="pasatiempo">
    <br><br>

    <button type="submit" name="guardar">Guardar</button>
    <br>
    <button type="submit" name="eliminar">Eliminar todos los datos</button>
    <button type="submit" name="eliminar1">Eliminar SOLO datos de Nombres</button>
    <button type="submit" name="eliminar2">Eliminar SOLO datos de edades</button>
    <button type="submit" name="eliminar3">Eliminar SOLO datos de pasatiempos</button>
</form>

<?php
if (isset($_POST["guardar"])){
	$nombre =$_POST["nombre"];
	$edad=$_POST["edad"];
	$pasatiempo=$_POST["pasatiempo"];
	file_put_contents("alumno.txt", $nombre . PHP_EOL,FILE_APPEND);
	file_put_contents("edad.txt", $edad . PHP_EOL,FILE_APPEND);
	file_put_contents("pasatiempo.txt", $pasatiempo . PHP_EOL,FILE_APPEND);
	echo "<p>Datos Guardados correctamente.</p>";
}
if(isset($_POST["eliminar"])){
	if(file_exists("alumno.txt")){ unlink("alumno.txt");}
	if(file_exists("edad.txt")){ unlink("edad.txt");}
	if(file_exists("pasatiempo.txt")){ unlink("pasatiempo.txt");
	echo "<p><strong>Registros eliminados correctamente<strong></p>";}
	else{
		echo "<p>No hay elementos que eliminar<p>";
	} 
}
if(isset($_POST["eliminar1"])){
	if(file_exists("alumno.txt")){unlink("alumno.txt");
	echo "<p><strong>Registros eliminados correctamente<strong></p>";}
	else{
		echo "<p>No hay elementos que eliminar<p>";
	} }

if(isset($_POST["eliminar2"])){
	if(file_exists("edad.txt")){ unlink("edad.txt");
	echo "<p><strong>Registros eliminados correctamente<strong></p>";}
	else{
		echo "<p>No hay elementos que eliminar<p>";
	} }

if(isset($_POST["eliminar3"])){
	if(file_exists("pasatiempo.txt")){ unlink("pasatiempo.txt");
	echo "<p><strong>Registros eliminados correctamente<strong></p>";}
	else{
		echo "<p>No hay elementos que eliminar<p>";
	} }


?>
<h3>Lista de datos de alumnos de 3°A registrados</h3>

<?php
if (file_exists("alumno.txt")){
	$contenido1=file_get_contents("alumno.txt");
	echo nl2br($contenido1);
}

if (file_exists("edad.txt")){
	$contenido2=file_get_contents("edad.txt");
	echo nl2br($contenido2);
}

if (file_exists("pasatiempo.txt")){
	$contenido3=file_get_contents("pasatiempo.txt");
	echo nl2br($contenido3);
}

else
	{echo "no existen registros.";}
?>


</body>
</html> 