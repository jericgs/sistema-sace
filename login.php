<?php 
// Conexão com o banco de dados 
require "conexao.php"; 

// Inicia sessões 
session_start(); 
/*
// Recupera o login 
$cpf = isset($_POST["cpf"]) ? addslashes(trim($_POST["cpf"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

*/

//$cpf='11088465480';
//$senha='123';

$cpf=0;
$senha=0;
if(isset($_POST["cpf"]) && isset($_POST["senha"])){
$cpf1 = $_POST["cpf"];
$cpf = transformaCPF($cpf1);
$senha = $_POST["senha"];
}


// Usuário não forneceu a senha ou o login 
if(!$cpf || !$senha){ 
	//echo "Você deve digitar sua senha e login!"; 
	echo"<script language='javascript' type='text/javascript'>alert('Voce deve digitar sua senha e login!');window.location.href='index.html';</script>";
        die();
	exit; 
} 

/** 
* Executa a consulta no banco de dados. 
* Caso o número de linhas retornadas seja 1 o login é válido, 
* caso 0, inválido. 
*/ 


$SQL = ("SELECT * FROM supervisorgeral WHERE cpfSupervisor = '$cpf' AND senha_supervisor='$senha'");

$result_id = @mysql_query($SQL) or die("Erro no banco de dados!"); 
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($total) { 

	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
	$dados = @mysql_fetch_array($result_id); 
		
		//header("Location: index.php"); 	
	
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 

		$_SESSION["nome_usuario"] = stripslashes($dados["nome_supervisor"]); 
		$_SESSION["cpf_supervisor"] = $cpf; 

		header("Location: pagina_principal.php"); 
		exit; 
	
	
}else{ 
	// Login inválido 
	
	echo"<script language='javascript' type='text/javascript'>alert('O login fornecido por voce e inexistente!');window.location.href='index.html';</script>";
        die();
	exit; 
} 

function transformaCPF($cpfQualquer){
	$arrayCpf = str_split($cpfQualquer);
	
	for($i=0;$i<count($arrayCpf);$i++){
		if(is_numeric($arrayCpf[$i])){		
			@$novoCpf = $novoCpf.$arrayCpf[$i];
		}
	}
	
	return @$novoCpf;
}


?>






