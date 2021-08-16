<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_sitephp";

$link = mysqli_connect($host,$user,$pass,$db);

$banco = mysqli_connect_errno();
// if ($banco == true) {

// 	echo "ERRO NA CONECÇÃO";
// } else {
// 	echo "CONECÇÃO OK";
// }

?>