<?php 
include("../Function/connect.php");
session_start(); //inicia ou recupera uma sessão que esta aberta
@$login = $_SESSION['login']; //email do usuário
@$senha_log = $_SESSION['password'];
$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
while($line = mysqli_fetch_array($sql)){
	@$senha = $line['senha'];
	@$nivel = $line['nivel'];
	@$foto = $line['foto'];
	@$id = $line['id_user'];

}
if(($senha_log == @$senha) && $login !="" && ((@$nivel !=1) || (@$nivel !=5))) {
 
}else{
	
	header('location:login.php?redir=carinho.php');

}

?>

<?php 
@$descricao = $_GET['pd'];
@$quantidade = $_GET['qt'];
@$preco = $_GET['pc'];
include "../Function/substituicao2.php";
$total = number_format(($quantidade*$preco));

$sql = mysqli_query($link,"INSERT INTO tb_carrinho(descricao,quantidade,valor,total,id_user)VALUES('$descricao','$quantidade','$preco','$total','$id')");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>## CARRINHO DE COMPRAS ##</title>
		<link rel="stylesheet" type="text/css" href="/200966315_EvandroSouzaRocha/css/style.css">

	</head>

	<body>
		
		<div id ="box_log">
			<h1 class="titulos" style="margin-left:2%">Usuário logado como: <?php echo "$login";?></h1>
			<a style="margin-left: 2%;" href="../index.php">Ir para home</a> | <a href="logout.php">Sair</a>
			<img src="<?php echo "../user/user$id/$foto"; ?>" style="float: right; width: 80px; height: auto; margin: -30px 5px 0 0;">
			<table style="font-size: 20px;font-family: calibre,sans-serif;width: 60%;margin: 0 auto;" border="1">
				<tr style="font-weight: bold;background: #beaf98;text-align: center;">

					<td style="color: #864d0a">Descrição do produto</td><td style="color: #864d0a">Quantidade</td><td style="color: #864d0a">Valor Un.</td><td style="color: #864d0a">TOTAL</td>
				</tr>
				
				<?php 
					$sql = mysqli_query($link,"SELECT * FROM tb_carrinho order by id_carrinho desc");
				 	

				 	while($line = @mysqli_fetch_array($sql)){
				  	$descri = $line['descricao'];
				  	$quanti = $line['quantidade'];
				  	$prec = $line['valor'];
				  	$tot = $line['total'];

  
			
  				?>
				<tr style="text-align: right;">
					<td style="color: #159; text-align: center;"><?php echo "$descri"; ?></td><td style="color: #159;"><?php echo "$quanti"; ?></td><td style="color: #159;"><?php echo "$prec"; ?></td><td style="color: #159; "><?php echo number_format("$tot",2,",","."); ?></td><td style="text-align:center;"><form method="GET" action="del_carrinho.php?"><input type="submit" name="delete" value="x" style="cursor: pointer;"><input type="hidden" name="descricao" value="<?php echo "$descri"; ?>"></form></td>
				</tr>

			<!-- </table> -->
					<?php }	?>
					<?php 
						$sql = mysqli_query($link,"SELECT SUM(total) as soma FROM tb_carrinho");
						while($line = mysqli_fetch_array($sql)){
							$soma = $line['soma'];
							
						}

					?>
					<tr>
						<th style="text-align:right; color:#159; font-size:14px;" colspan="4"><?php  echo "Total: ".number_format($soma,2,",","."); ?></th>
					</tr> 
			</table>
		</div>

	</body>


</html>