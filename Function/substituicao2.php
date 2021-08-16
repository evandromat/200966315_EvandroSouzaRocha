<?php 

$descricao = str_replace("-","_",$descricao);
$descricao = str_replace("%","_",$descricao);
$descricao = str_replace("&","_",$descricao);
$descricao = str_replace("#","_",$descricao);
$descricao = str_replace("$","_",$descricao);
$descricao = str_replace("á","a",$descricao);
$descricao = str_replace("à","a",$descricao);
$descricao = str_replace("ã","a",$descricao);
$descricao = str_replace("â","a",$descricao);
$descricao = str_replace("ä","a",$descricao);
$descricao = str_replace("Á","a",$descricao);
$descricao = str_replace("À","a",$descricao);
$descricao = str_replace("Â","a",$descricao);
$descricao = str_replace("Ä","a",$descricao);
$descricao = str_replace("Ã","a",$descricao);
$descricao = str_replace("é","e",$descricao);
$descricao = str_replace("è","e",$descricao);
$descricao = str_replace("É","e",$descricao);
$descricao = str_replace("È","e",$descricao);
$descricao = str_replace("í","i",$descricao);
$descricao = str_replace("ì","i",$descricao);
$descricao = str_replace("Í","i",$descricao);
$descricao = str_replace("Ì","i",$descricao);
$descricao = str_replace("ó","o",$descricao);
$descricao = str_replace("ò","o",$descricao);
$descricao = str_replace("õ","o",$descricao);
$descricao = str_replace("ô","o",$descricao);
$descricao = str_replace("Ó","o",$descricao);
$descricao = str_replace("Ò","o",$descricao);
$descricao = str_replace("Ô","o",$descricao);
$descricao = str_replace("Õ","o",$descricao);
$descricao = str_replace("ú","u",$descricao);
$descricao = str_replace("ù","u",$descricao);
$descricao = str_replace("Ú","u",$descricao);
$descricao = str_replace("Ù","u",$descricao);
$descricao = str_replace("ç","c",$descricao);
$descricao = str_replace("Ç","c",$descricao);
//passando texto da variavel para minúscula
$descricao = ucfirst($descricao);
?>