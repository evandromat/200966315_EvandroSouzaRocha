<?php 
include("../Function/connect.php");
date_default_timezone_get('America/Sao_Paulo');
session_start(); //inicia ou recupera uma sessão que esta aberta
$login = $_SESSION['login']; //email do usuário
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql)){
	$senha = $line['senha'];
	$nivel = $line['nivel'];
	$id_user = $line['id_user'];

}
if(($senha_log == $senha) && ($nivel == 1)){
	$titulo = $_POST['titulo'];
	$foto = $_FILES['foto']['name'];
	$tipo = $_FILES['foto']['type'];
	$conteudo = $_POST['conteudo'];
	$desc_breve = $_POST['desc_breve'];
	$preco = $_POST['preco'];
	$composicao = $_POST['composicao'];
	$unidade = $_POST['unidade'];

	include "../Function/substituicao.php"; // correção no nome da foto.

	$registro = false;

	if($titulo != "" && $foto != "" && $conteudo != ""){
		$registro = true;
	}else{
		echo "<script>window.history.go(-1);</script>";
	}

	$sql = mysqli_query($link, "SELECT * FROM tb_postagens order by id_post desc limit 1");
	while($line = mysqli_fetch_array($sql)){
		@$id = $line['id_post'];
	}
	


if ($registro == true){
	
	@$id = $id + 1;
	$pasta = "Postagens/Post$id";
	
	if(file_exists($pasta)){
		
	}else{
	mkdir($pasta,07777);
	

	}
	
	$dt = date('Y-m-d');
	$hr = date('H:i:s');
	$page = 1;

	mysqli_query($link,"INSERT INTO tb_postagens(titulo,desc_breve,preco,unidade,imagem,texto,composicao,dt,hr,page,id_user)
		VALUES('$titulo','$desc_breve','$preco','$unidade','$foto','$conteudo','$composicao','$dt','$hr','$page','$id_user')");
	
	move_uploaded_file($_FILES['foto']['tmp_name'],$pasta."/".$foto);
	header('location:form_postar.php');


}else{
	echo "Não foi possivel cadastrar esse produto";
	echo "<a href=form_postar.php>Voltar ao formulário</a>";
}



}else{
	
	header('location:../index.php');
}
?>
