<?php 
include("../Function/connect.php");
session_start(); //inicia ou recupera uma sessão que esta aberta
$login = $_SESSION['login']; //email do usuário
$senha_log = $_SESSION['password'];
$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql)){
	$senha = $line['senha'];
	$nivel = $line['nivel'];
	$foto = $line['foto'];
	$id = $line['id_user'];
	$nome = $line['nome'];

}
if(($senha_log == $senha) && ($nivel >1)){
	
}else{
	
	header('location:../index.php');
}

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>## <?php echo strtoupper($nome);?> ##</title>
		<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">

	</head>

	<body>
		
		<div id ="box_log">
			<h1 class="titulos" style="margin-left:2%">Nome:  <?php echo ucwords($nome);?></h1>
			<h1 class="titulos" style="margin-left:2%">Email:  <?php echo "$login";?></h1>
			<a style="margin-left: 2%;" href="../index.php">Ir para home</a> | <a href="logout.php">Sair</a>
			<img src="<?php echo "../user/user$id/$foto"; ?>" style="float: right; width: 80px; height: auto; margin: -60px 10px 0 0;">
		</div>

	</body>


</html>