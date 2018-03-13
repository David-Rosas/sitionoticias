<?php
//1 es agregar 2 eliminar 3 actualizar
$accion = $_GET['ac'];
if(isset($_POST['titulo']) && isset($_POST['contenido'])){
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
}

$conexion = mysqli_connect("localhost","root","vale2013","db_noticias");//host, user, pass, db

switch ($accion) {
	case 1:
		//agregar nueva noticia
	mysqli_query($conexion,"INSERT INTO noticias values(NULL,'$titulo','$contenido')");
	echo "se agrego la noticia<br>";
	break;
    case 2:
    $id = $_POST['id'];
	$consulta = "UPDATE `noticias` SET `titulo`='$titulo',`contenido`='$contenido' WHERE id = $id";
	mysqli_query($conexion,$consulta);
	echo "Actualizado correctamente <br>";
	break;
	case 3:
	$id = $_GET['id'];
		$consulta = "DELETE from noticias WHERE id = $id";
	mysqli_query($conexion,$consulta);
	echo "Eliminado correctamente <br>";
		break;
		default:
		echo "No se realiza niguna accion";
		break;
}


?>

<a href="index.php">Ver noticias</a>