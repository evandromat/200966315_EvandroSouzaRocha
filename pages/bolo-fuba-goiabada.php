<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="UTF-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Doces e Salgados da vovó!</title>
			<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">
			<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/gallery.prefixed.css">
		 	<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/gallery.theme.css">
		 	<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/modal.css">

	</head>
	<body>
		
		<div id="geral"> 

			<div id="topo">
				<?php 
				include 'topo.php';
				?>
			</div> <!-- fim div topo -->

			<div id="menu">
				<?php 
				include 'menu.php';
				?>
			</div><!--  fim div menu -->

			<div id="produtos_conteudo">
				<div class="apresentacao_produtos">
					<div class="fotos">
						
						<div class="modal">
						    <div class="modal_content">
						        <img src="/200966315_EvandroSouzaRocha/img/bolo-fuba-goiabada.jpg" id="modal_img">
						    </div>
						    <span id="bt_close">&times;</span>
						</div>


						    <div class="container">
						        <div class="row">
						            <div class="card_img">
						                <img src="/200966315_EvandroSouzaRocha/img/bolo-fuba-goiabada.jpg" class="small_img">
						            </div>
						            
						    	</div>
        
    						</div>

					</div> <!-- fim div fotos -->

						<div class="descricao_produto">
							<div class="titulo_descricao">
								<h2 class="tit_desc">Bolo de Fubá c/ Goiabada Kg.</h2>
							</div> <!-- fim div titulo descrição -->

							<div class="descricao_produto_texto">
								<br>A farinha de milho ou fubá não é um substituto direto para a farinha de trigo, pois não possui glúten.<br/>
							</div> <!-- fim div descrição produto texto -->

							<div class="preco">
								<h2>R$40,00/kg</h2>
							</div> <!-- fim div preço -->
							
							<div class="composicao_produto">
								<div class="view-content">
									<div class="ingredients-box">
										<h4><br/>Composição</h4>
										<ul>
											<li>Fubá de milho</li>
										</ul>
									</div>
									<div class="ingredients-box">
							
										<ul class="ingredients-box">
											<li>ovo </li>
											<li> açúcar</li>
											<li>farinha de trico</li>
											<li>óleo vegetal</li>
											<li>leite</li>
											<li>fermento em pó</li>
										</ul>
										</div>
									</div>
							</div>
						</div><!-- fim div apresentação conteudo -->
					
				</div> <!-- fim div apresnsentação produto -->

			</div> <!-- fim produto conteudo -->
<div class="encomendar"><h2 class="spam_enc"><a class="enc" href="/200966315_EvandroSouzaRocha/pages/contato.php">Encomendar</a></h2></div>
			<div id="rodape">
				<?php 
				include 'rodape.php';
				?>
				
			</div>  <!-- fim div rodape -->
		</div> <!-- fim div geral -->
		<script type="text/javascript" src="/200966315_EvandroSouzaRocha/js/galeria_modal.js"></script>
	</body>
</html>