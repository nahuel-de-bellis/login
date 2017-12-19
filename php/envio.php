<?php
	header("Content-Type: application/json; charset=UTF-8");//por post
	$name = json_decode($_POST["x"], true);//Por post
	$user = "root";
	$server = "localhost";

	$sql = 'SELECT * FROM test WHERE nombre = "'.$name["nombre"].'" AND contra = "'.$name["password"].'"';

	if($conexion = @mysql_connect($server, $user))
	{
		$db = mysql_select_db("test");
		$resul = mysql_query($sql);
		$fila = mysql_fetch_row($resul) or die ("Password or Name incorrect");
		echo "indexx.html";
	}

	
	/* Muestra lo obtenido*/
	//echo "<br>lo recibido por post: <br>";
	//print_r($name);
	//echo "<br>";
	$f = fopen("prueba.json", 'w');
	fwrite($f, json_encode($name));
	fclose($f);
	$str_datos = file_get_contents("prueba.json");
	$data = json_decode($str_datos, true);
	//echo "dentro de prueba.json: <br>";
	//print_r($data);
	//echo $name["nombre"];

// Example by deerme.org
/*$data = file_get_contents("https://tiendamovistar.terra.com/capa/cl/default.aspx");

if ( preg_match('|<a href="http://mobile.terra.com/sc/cl/musicamagenta/">(.*?)</a>|is' , $data , $cap ) )
{
	echo "UF ".$cap[0];
}*/
	//$q = $_REQUEST["q"]; // Por GET
?>

