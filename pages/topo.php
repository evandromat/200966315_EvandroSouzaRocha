
<div class="topo_img">
<img src="/200966315_EvandroSouzaRocha/img/logo.png" class="logo"/>
<?php 
include ($_SERVER['DOCUMENT_ROOT']."/200966315_EvandroSouzaRocha/Function/connect.php");
session_start();
@$email = $_SESSION['login'];
@$sql = mysqli_query($link,"SELECT * FROM tb_user WHERE email = '$email'");
while($line = mysqli_fetch_array($sql)){
	@$nivel = $line['nivel'];
	$foto = $line['foto'];
	$id = $line['id_user'];
}

if (@$nivel == 1) {
	echo "<img class=links_top src='/200966315_EvandroSouzaRocha/user/user$id/$foto'style= 'float: rigth; width: 30px; height: auto; '/>";
	echo "<a href=/200966315_EvandroSouzaRocha/pages/logout.php class=links_top>Sair</a>";
	echo "<a href=/200966315_EvandroSouzaRocha/pages/adm.php class=links_top>Ir para ADM</a>";
}else if(@$nivel == ""){

	echo "<a href=/200966315_EvandroSouzaRocha/pages/login.php class=links_top>Entrar</a>";
	echo "<a href=/200966315_EvandroSouzaRocha/pages/form_cadastro.php class=links_top>Cadastre-se</a>";
}else{
	echo "<img class=links_top src='/200966315_EvandroSouzaRocha/user/user$id/$foto'style= 'float: rigth; width: 30px; height: auto; '/>";
	echo "<a href=/200966315_EvandroSouzaRocha/pages/logout.php class=links_top>Sair</a>";
	echo "<a href=/200966315_EvandroSouzaRocha/pages/cliente.php class=links_top>Ir para Cliente</a>";
}

 ?>

<strong><p class="nome_loja">Doces e Salgados da vovó</p></strong>
</div>

