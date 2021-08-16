<html>
<head>
	<meta charset="utf-8">
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">
</head>
<body>
	<div id="geral">
		<div id="topo">
			<?php 
			include 'topo.php';
			?>
		</div>
		<div id="menu">
			<?php 
			include 'menu.php';
			?>
		</div>
		<div id="conteudo"><br><br>
			<form action="/200966315_EvandroSouzaRocha/pages/cad_contato.php" method="POST">
				<label class="legenda">Nome:</label><br>
				<input type="text" name="nome" class="campos" required placeholder="Preencha esse campo com seu nome completo"><br>
			
				<label class="legenda">Email:</label><br>
				<input type="email" name="email" class="campos" placeholder="Preencha esse campo com seu Email" required><br>
			
				<label class="legenda">Assunto:</label><br>
				<input type="text" name="assunto" class="campos" placeholder="Sobre o que você deseja falar?"><br>
				
				<label class="legenda">Conteúdo:</label><br>
				<textarea class="campo2" placeholder="Digite em no máximo 140 caracteres o conteúdo" maxlength="140"></textarea><br><br>
				<input type="submit" value="Enviar" class="bt_enviar">
			</form>
		</div>
		<div id="rodape">
			<?php 
			include 'rodape.php';
			?>
		</div>
	</div>
</body>
</html>