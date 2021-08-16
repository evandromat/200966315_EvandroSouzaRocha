
<html>
	<head>
		<meta charset="utf-8">
		<title>Doces e Salgados da vovó!</title>
		<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">

	</head>

	<body>
		
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

}
if(($senha_log == $senha) && ($nivel == 1)){
	
}else{
	
	header('location:../index.php');
}
?>
		<div id ="box_form">
			<h1 class="titulos" style="margin-left: 10%;">Cadastro de produto</h1>
		   <?php echo "<img class=links_top src='/200966315_EvandroSouzaRocha/user/user$id/$foto'style= 'float: rigth; width: 30px; height: auto; margin: -40px 5px 0 0'/>"; ?>

			<form action="/200966315_EvandroSouzaRocha/pages/postar.php" method="POST" enctype="multipart/form-data">
				
				<input type="text" name="titulo" class="campos_cad" placeholder="Nome do produto" maxlength="59">
				<input type="text" name="desc_breve" class="campos_cad" placeholder="Breve descrição" maxlength="199">
				<input type="text" name="preco" class="campos_cad" placeholder="preço de venda" maxlength="9">
				<select name="unidade" class="campos_cad">
					<option>Selecione aqui a unidade de medida</option>
					<option value="/Un.">Un</option>
					<option value="/kg.">Kg</option>
					<option value="/Dúzia.">Dúzia</option>
				</select>
				<input type="file" name="foto" class="campos_cad">
				

				<textarea name="conteudo" class="campos_cad" placeholder="Descrição do produto" maxlength="999"></textarea>
				<textarea name="composicao" class="campos_cad" placeholder="Composição do produto" maxlength="999"></textarea>
				
				<div id="botoes">
					<input type="submit" value="Publicar" class="bt_cad">
					<input type="reset" value="Limpar" class="bt_cad">
				</div>
			</form>
			<div class="botoes">
				<a class="form_link" href="/200966315_EvandroSouzaRocha/index.php">&larr; Voltar para a página principal</a>
				
			</div>
		</div>

	</body>


</html>