 <div class="gallery autoplay items-3">
    <div id="item-1" class="control-operator"></div>
    <div id="item-2" class="control-operator"></div>
    <div id="item-3" class="control-operator"></div>

    <figure class="item">
      
      <img src="/200966315_EvandroSouzaRocha/img/bn01.png">
    </figure>

    <figure class="item">
      <img src="/200966315_EvandroSouzaRocha/img/bn02.png">
    </figure>

    <figure class="item">
      <img src="/200966315_EvandroSouzaRocha/img/bn03.png">
    </figure>

    <div class="controls">
      <a href="#item-1" class="control-button">•</a>
      <a href="#item-2" class="control-button">•</a>
      <a href="#item-3" class="control-button">•</a>
    </div>
  </div>
  
 





<div id="conteudo_principal">
	<h1 class="titulos">Produtos </h1>
	 <?php 
		  include("/Function/connect.php");
		  $sql = mysqli_query($link,"SELECT * FROM tb_postagens where page = 1 order by id_post desc");
		  while($line = mysqli_fetch_array($sql)){
		  	$titulo = $line['titulo'];
		  	$imagem = $line['imagem'];
		  	$conteudo = $line['texto'];
		  	$id_post = $line['id_post'];
  
			
  	?>

	<div class="postagens">
		
		<a href="/200966315_EvandroSouzaRocha/pages/produto.php?cod_prod=<?php echo "$id_post"; ?>">
		<img src="/200966315_EvandroSouzaRocha/pages/postagens/<?php echo "post".$id_post."/".$imagem; ?>" class="imagem">
		<p class="nome_produto"><?php echo $titulo; ?></p>
		<span class="desc_p"><?php echo $conteudo; ?></span>
		</a>
	</div>
	<?php 
}
?>
</div>


<div class="conteudo_recente">
<div id="recentes">
	<h1 class="titulos">Mais vendidos</h1>
	<div class="postagens_recentes">
		<h1 class="titulos"><a href="/200966315_EvandroSouzaRocha/pages/bolo-fuba-goiabada.php"><img class="img_novidade" src="/200966315_EvandroSouzaRocha/img/bolo-fuba.jpg">Bolinhos de Fubá</a></h1>
		
	</div>

	<div class="postagens_recentes">
		<h1 class="titulos"><a href="/200966315_EvandroSouzaRocha/pages/bolo-chuva.php"><img class="img_novidade" src="/200966315_EvandroSouzaRocha/img/bolinho-chuva.jpg">Bolinhos de chuva</a></h1>
		
	</div>
</div>