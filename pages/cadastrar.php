<?php 

// Incluindo arquivo de conexão
include "../Function/connect.php";
date_default_timezone_get('America/Sao_Paulo');


// variaves
$nome 		= 	$_POST['nome'];
$email 		= 	$_POST['email'];
$senha 		= 	$_POST['senha'];
$resenha	=	$_POST['repetesenha'];
$lembrete	=	$_POST['lembrete'];
$foto		=	$_FILES['foto']['name'];
$tipo		=	$_FILES['foto']['type'];



// Variável registro para verificar se usuario esta ou não habiitado a realizar o cadastro
$registro = false;
if ((!empty($nome)) && (!empty($email)) && (!empty($senha)) && (!empty($lembrete)) && (!empty($foto))) {
	if ($senha != $resenha) {
		echo "<script>alert('Senhas Diferentes...');window.history.go(-1);</script>";
		
	}else{
		// habilitando o usuário para o cadastro
		$registro = true;
	}
	
}else{
	echo "<script>alert('É necessário preencher todos os campos...');window.history.go(-1);</script>";
}


// fazendo uma consulta para pegar o id do usuário
$sql = mysqli_query($link,"SELECT * FROM tb_user order by id_user desc limit 1");
while ($line = mysqli_fetch_array($sql)) {

	$id = $line['id_user'];
	$email_user = $line['email'];
	
}



@$id = $id + 1;
$pasta = "user".$id; //sempre vai ter um id acima do ultimo cadastrado




// Verificando se a pasta exite
if (file_exists("../user/".$pasta)) {
	// echo "<script>alert('Essa pasta já existe');</script>";
}else{
	mkdir("../user/".$pasta,0777);
	// echo "<script>alert('A pasta ".$pasta." foi criada com sucesso!');</script>";
}




//Substituido caracteres especiais e espaços
include "../Function/substituicao.php";


$formatos = array(1=>'image/png',2=>'imag/jpg',3=>'image/jpeg',4=>'image/gif');

$teste = array_search($tipo, $formatos);
if ($teste == true) {
	move_uploaded_file($_FILES['foto']['tmp_name'], "../user/".$pasta."/".$foto);


}else{
	rmdir("../user/".$pasta);
	echo "<script>alert('tipo de arquivo não suportado!'); window.location.href='form_cadastro.php';</script>";
}



// Pegando data e hora do computador
$dt = date('Y-m-d');
$hr = date('H:i:s');


// Cadastrando novo usuário
if ($registro == true && $email != @$email_user && $teste == true) {

mysqli_query($link,"INSERT INTO tb_user(nome, email,senha,lembrete,foto,nivel,dt,hr)VALUES('$nome','$email','$senha','$lembrete','$foto',5,'$dt','$hr')");
echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='../index.php';</script>";
echo "<p style ='text-align:center;color:#333;padding:5px;'>Usuário cadastrado com sucesso! <br/>";
echo "<a href ='../index.php' style='color:#59f'>| Ir para Home </a><a href='../login.php' style='color:#59f'> | Login</a>";
echo "</p>";
}else{
	echo "<script>window.history.go(-1);</script>";
}

?>
