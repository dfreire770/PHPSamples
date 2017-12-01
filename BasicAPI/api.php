 <?php
$acl[0]="192.168.1.234";
$acl[1]="192.168.1.249";
/*$acl[1]="192.168.1.222";
$acl[2]="192.168.1.223";
$acl[3]="192.168.1.221";
$acl[4]="192.168.1.224";*/

if($_GET['hola']=="amigo")
if(in_array($_SERVER['REMOTE_ADDR'], $acl)) //se especifica que direcciones pueden entrar al api
{
	$nombre[0]=$_SERVER['REMOTE_ADDR'];  //$nombre[0]=$mi_lista_nombres->recuperar(0);
	$nombre[1]="Andres2";  //$nombre[1]=$mi_lista_nombres->recuperar(1);
	$nombre[2]="Andres3";  //$nombre[2]=$mi_lista_nombres->recuperar(2);
	
	$telefono[0]="2456987";  //$telefono[0]=$mi_lista_telefonos->recuperar(0);
	$telefono[1]="2456985";  //$telefono[1]=$mi_lista_telefonos->recuperar(1);
	$telefono[2]="2456986";  //$telefono[2]=$mi_lista_telefonos->recuperar(2);
	
	$cadena='<?xml version="1.0" encoding="utf-8"?>
	<personas>';
	
	for($i=0; $i<count($nombre); $i++)
	{
		$cadena.='<persona>
			<nombre>'.$nombre[$i].'</nombre>
			<telefono>'.$telefono[$i].'</telefono>
		</persona>';
	}
	$cadena.='</personas>';
	return $cadena;
}
?>