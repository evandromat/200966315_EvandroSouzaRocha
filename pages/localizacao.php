<html>
<head>
	<meta charset="utf-8">
	<title>Site em PHP</title>
	<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">
	<script type="text/javascript" src="/200966315_EvandroSouzaRocha/js/js.js"></script>
</head>
<body>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVoGcMbaRCkIhoXW8f7N5UwcRMkivyOKw&callback=inicializar">
    </script>
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
		<div id="conteudo">
			<?php 
			include 'conteudo_localizacao.php';
			?>
		</div>
		<div id="rodape">
			<?php 
			include 'rodape.php';
			?>
		</div>
	</div>
</body>
</html>