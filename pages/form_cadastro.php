<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Doces e Salgados da vovó!</title>
		<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">

	</head>

	<body>
		
		<div id ="box_form">
			<h1 class="titulos" style="margin-left: 10%;">Cadastre-se</h1>
			<form action="/200966315_EvandroSouzaRocha/pages/cadastrar.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="nome" class="campos_cad" placeholder="Nome">
				<input type="email" name="email" class="campos_cad" placeholder="Email">
				<input type="password" name="senha" class="campos_cad" placeholder="Senha">
				<input type="password" name="repetesenha" class="campos_cad" placeholder="Repita a Senha">
				<input type="text" name="lembrete" class="campos_cad" placeholder="Lembrete">
				<input type="file" name="foto" class="campos_cad">	
				<div id="botoes">
					<input type="submit" value="Cadastrar" class="bt_cad">
					<input type="reset" value="Limpar" class="bt_cad">
				</div>
			</form>
			<div class="botoes">
				<a class="form_link" href="/200966315_EvandroSouzaRocha/index.php">&larr; Voltar para a página principal</a>
				<p class="p_form">Já possui cadastro? Então clique no link abaixo para fazer o login </p>
				<a class="form_link" href="/200966315_EvandroSouzaRocha/pages/login.php">Logar</a>
			</div>
		</div>

	</body>


</html>