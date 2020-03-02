<?php

$random = rand(10, 13);

$db_host = "127.0.0.1";
$db_user = "sotemcom_user12";
$db_password = "trevera0";
$db_name = "sotemcom_sensores";
$db_table_name = "Temperatura";
echo $db_host;
echo "<br>";
echo $db_user;
echo "<br>";
echo $db_password;
echo "<br>";
echo $db_name;
echo "<br>";


$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_errno) {
 			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>