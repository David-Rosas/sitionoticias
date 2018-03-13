<!DOCTYPE html>
<html>
<head>
	<title>Lista mantenimiento</title>
</head>
<body>
<h1>Nuestras noticias</h1>
<?php
$conexion = mysqli_connect("localhost","root","","db_noticias");//host, user, pass, db
$registros = mysqli_query($conexion,"select * from noticias");

while ($reg = mysqli_fetch_array($registros)) {
	echo "<h2>".$reg['titulo']."</h2><br>";
	echo $reg['contenido']."<br>";
	echo "<a href=formulario.php?id=".$reg['id'].">Actualizar</a>";
	echo " <a href=accion.php?id=".$reg['id']."&ac=3> Eliminar</a>";
	echo "<hr>";
	echo "<br>";
}
?>
</body>
</html>