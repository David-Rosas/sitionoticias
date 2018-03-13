<!DOCTYPE html>
<html>
<head>
	<title>sitio de noticias</title>
</head>
<body>
<h1>Nuestras noticias</h1>
<?php
$conexion = mysqli_connect("localhost","root","vale2013","db_noticias");
$registros = mysqli_query($conexion,"select * from noticias");

while ($reg = mysqli_fetch_array($registros)) {
	echo "<h2>".$reg['titulo']."</h2><br>";
	echo $reg['contenido']."<br>";
	echo "<hr>";
	echo "</div>";
}
?>
<h3> fin de la sesion</h3>

</body>
</html>