<?php

//Aqui debe estar el codigo de la recepcion y validacion de datos



$conexion = mysql_connect("127.0.0.1:3306","root","");

if($conexion){
	
	mysql_select_db("examen",$conexion);
	
	$sql = "INSERT INTO Alerta (Color,Fecha)
			VALUES('".$_POST['color']."',NOW())";
	$resultado = mysql_query($sql, $conexion) or die(mysql_error());
}
else{
	echo "existe un error de conexion";
	
}


?>