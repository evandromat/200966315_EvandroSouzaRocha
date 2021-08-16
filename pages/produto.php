
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
		<?php 
		  include("../Function/connect.php");
		  $sql = mysqli_query($link,"SELECT * FROM tb_postagens where page = 1 order by id_post desc");
		  while($line = mysqli_fetch_array($sql)){
		  	$titulo = $line['titulo'];
		  	$imagem = $line['imagem'];
		  	$conteudo = $line['texto'];
		  	$id_post = $line['id_post'];
		  	$descricao = $line['texto'];
		  	$preco = $line['preco'];
		  	
  			}

  		?>
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
						    	<?php 
						    		$id_img = $_GET['cod_prod'];
						    	$sql = mysqli_query($link,"SELECT * FROM tb_postagens where id_post = $id_img");
						    	while($line = mysqli_fetch_array($sql)){
						    		$img = $line['imagem'];
						    		$tit = $line['titulo'];
						    		$desc = $line['texto'];
						    		$pre = $line['preco'];
						    		$uni = $line['unidade'];
						    		$composicao = $line['composicao'];
						    	}
						    	?>

						        <img src="/200966315_EvandroSouzaRocha/pages/Postagens/<?php echo "post".$_GET['cod_prod']."/".$img;   ?>" id="modal_img">
						    </div>
						    <span id="bt_close">&times;</span>
						</div>


						    <div class="container">
						        <div class="row">
						            <div class="card_img">
						                <img src="/200966315_EvandroSouzaRocha/pages/Postagens/<?php echo "post".$_GET['cod_prod']."/".$img;   ?>" class="small_img">
						            </div>
						            
						    	</div>
        
    						</div>

					</div> <!-- fim div fotos -->

						<div class="descricao_produto">
							<div class="titulo_descricao">
								<h2 class="tit_desc"><?php echo "$tit"; ?><br></h2>
							</div> <!-- fim div titulo descrição -->
							<br>
							<div class="descricao_produto_texto">
								<br/><br><br><?php echo "$desc"; ?><br/>
							</div> <!-- fim div descrição produto texto -->

							<div class="preco">
								<h2><br><br>R$ <?php echo "$pre$uni"; ?></h2>
							</div> <!-- fim div preço -->
							<div class="quant">
								<h2><br><br>
									<form action="carrinho.php" method="GET">
									<label>Quantidade: </label>
									<select name="qt">
										<option value="1">1<?php echo "$uni"; ?></option>
										<option value="2">2<?php echo "$uni"; ?></option>
										<option value="3">3<?php echo "$uni"; ?></option>
										<option value="4">4<?php echo "$uni"; ?></option>
										<option value="5">5<?php echo "$uni"; ?></option>
									</select><br><br>
									
									<input type="hidden" name="pd" value="<?php echo $tit ?>">
									<input type="hidden" name="pc" value="<?php echo $pre ?>">
									<input type="submit"  value="Adcionar ao carrinho">
									</form>
								</h2>
							</div> <!-- fim div preço -->
							<div class="composicao_produto">
								<div class="view-content">
									<div class="ingredients-box">
										<h4><br/>Composição</h4>
										<ul>
											<li><?php echo "$composicao"; ?></li>
										</ul>
									</div>
									
									</div>
							</div>
						</div><!-- fim div apresentação conteudo -->
					
				</div> <!-- fim div apresnsentação produto -->

			</div> <!-- fim produto conteudo -->
<!-- <div class="encomendar"><h2 class="spam_enc"><a class="enc" href="/200966315_EvandroSouzaRocha/pages/carrinho.php?qtd=<?php echo "$pre"; ?>">Encomendar</a></h2></div> -->
			<div id="rodape">
				<?php 
				include 'rodape.php';
				?>
				
			</div>  <!-- fim div rodape -->
		</div> <!-- fim div geral -->
		<script type="text/javascript" src="/200966315_EvandroSouzaRocha/js/galeria_modal.js"></script>
	</body>
</html>