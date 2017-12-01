<?php
/*$datos = simplexml_load_file("http://192.168.1.174/daya/personas.xml");
print_r($datos);
$datos = simplexml_load_file("http://192.168.1.175/api/personas.xml");
print_r($datos);
$datos = simplexml_load_file("http://192.168.1.180/api/datos.xml");
print_r($datos);
$datos = simplexml_load_file("http://192.168.1.172/andres/personas1.xml");
print_r($datos);
$datos = simplexml_load_file("http://192.168.1.178/APIS/personas.xml");
print_r($datos);*/

$direccion[0]="http://192.168.1.219/andres/api.php";
/*$direccion[1]="http://192.168.1.175/api/personas.xml";
$direccion[2]="http://192.168.1.180/api/datos.xml";
$direccion[3]="http://192.168.1.172/andres/personas1.xml";
$direccion[4]="http://192.168.1.178/APIS/personas.xml";
$direccion[5]="http://192.168.1.175/api/api.php";
$direccion[6]="http://192.168.1.178/APIS/api.php";*/
?>
<center><table border="1" bordercolor="#000000" cellspacing="0" cellpadding="3">

<?php
echo "<td>Nombre</td>";
echo "<td>Telefono</td>";
for($i=0;$i<count($direccion);$i++)
{
	$datos=simplexml_load_file($direccion[$i]);
	for($j=0;$j<count($datos->persona);$j++)                                                                    
	{
	?>
    <tr>
    <?php
		echo "<td>".$datos->persona[$j]->nombre."</td>";
		echo "<td>".$datos->persona[$j]->telefono."</td>";
	?>
    </tr>
    <?php
	}
}
?>
</table>
