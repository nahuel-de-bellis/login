<?php
header("Content-Type: application/json; charset=UTF-8");//por post
$name = json_decode($_POST["h"], true);//or die("MUERTE");//Por post
print_r($name);//verificar que no sea script js //XSS
$i = 2;
$reg = 'INSERT INTO `test`(`id`, `nombre`, `apellido`, `contra`) VALUES ( 210, "'.$name["nombre"].'", "lala21l", "'.$name["password"].'");';
$user = "root";
$server = "localhost";
$conexion = @mysql_connect($server, $user) #deprecated
or die("error");
$db = mysql_select_db("test");
$resul = mysql_query($reg);
?>
