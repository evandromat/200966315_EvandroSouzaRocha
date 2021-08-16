<?php 
include("../Function/connect.php");

$descricao = $_GET['descricao'];

$sql_max_id = mysqli_query($link,"SELECT * from tb_carrinho WHERE descricao = '$descricao' AND id_carrinho = (SELECT max(id_carrinho) FROM tb_carrinho)");

while($line = mysqli_fetch_array($sql_max_id)){
	$max_id = $line['id_carrinho'];
}
	





$sql_del = mysqli_query($link,"DELETE from tb_carrinho where descricao = '$descricao' and id_carrinho = '$max_id'");

header('location:carrinho.php');




?>