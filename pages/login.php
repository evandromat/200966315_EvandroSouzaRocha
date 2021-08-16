<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Doces e Salgados da vovó!</title>
		<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">

	</head>

	<body>
		
		<div id ="box_form">
			<h1 class="titulos" style="margin-left: 10%;">Tela de Login</h1>
			
			<?php 
				@$v = $_GET['valor'];
				if($v){
					echo " <br/><spam style='color:red; margin-left:10%'>-Todos os campos devem ser preenchidos...</spam>";
				}
			?>

			<form action="/200966315_EvandroSouzaRocha/pages/logar.php" method="POST" enctype="multipart/form-data">
				
				<input type="email" name="email" class="campos_cad" placeholder="Email">
				<input type="password" name="senha" class="campos_cad" placeholder="Senha">
				
				<div id="botoes">
					<input type="submit" value="Logar" class="bt_cad">
					<input type="reset" value="Limpar" class="bt_cad">
				</div>
			</form>
			<div class="botoes">
				<a class="form_link" href="/200966315_EvandroSouzaRocha/index.php">&larr; Voltar para a página principal</a>
				<p class="p_form">Ainda não possui cadastro? então clique no link abaixo apra fazer o cadastro </p>
				<a class="form_link" href="/200966315_EvandroSouzaRocha/pages/form_cadastro.php">Cadastrar-se</a>
			</div>
		</div>

	</body>


</html>