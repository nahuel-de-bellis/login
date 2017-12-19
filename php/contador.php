<?php
$user = "root";
$server = "localhost";
$sql = 'SELECT COUNT(*) FROM `test` WHERE id > 1;';
$conexion = @mysql_connect($user, $server) 
or die("ERROR: Conexion no realizada");
$dataBase = mysql_select_db("test");
$resul = mysql_query($sql);
$j = $resul;
echo $j;
?>
