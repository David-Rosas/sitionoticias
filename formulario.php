<!DOCTYPE html>
<html>
<head>
	<title>Formulario de actualizacion</title>
</head>
<body>
<?php
$id = $_GET['id'];
$conexion = mysqli_connect("localhost","root","","db_noticias");//host, user, pass, db
$registros = mysqli_query($conexion,"select * from noticias where id =$id");
$reg = mysqli_fetch_array($registros);
?>
<form method="POST" action="accion.php?ac=2"> 
<input type="hidden" name="id" value="<?php echo $id; ?>">
<p>Titulo</p>
<input type="text" name="titulo" value="<?php echo $reg['titulo']; ?>">
<p>Contenido</p>
<textarea name="contenido"><?php echo $reg['contenido'];?></textarea><br>
<input type="submit" value="Actualizar noticias">
</body>
</html>