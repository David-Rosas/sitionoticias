<!DOCTYPE html>
<html>
<head>
	<title>Convertidor kg/libra y libra/kg</title>
</head>
<body>
<h1>Convertidor</h1>
<h2>Introdusca los datos a convertir</h2>
<form method="GET">
<input type="text" name="valor">
<select name="conversion">
	<option value="1">kilos a libras</option>
	<option value="2">libras a kilos</option>
</select>
<br>
<input type="submit" name="convertir"><br>
</form>
<?php

if (isset($_GET['valor']) && isset($_GET['conversion'])){
	$valor = $_GET['valor'];
    $conversion = $_GET['conversion'];

    if($conversion == 1){
    	$resultado = $valor * 2.2;
    	echo "el resultado es ".$resultado." libras";

    }

    else if($conversion == 2){
    	$resultado = $valor * 0.454;
    	echo "el resultado es ".$resultado." kilos";

    }
    else{
    	echo "valor desconocido";
    }
}
else{
echo "No ha introducido nigun valor";
}
?>
</body>
</html>