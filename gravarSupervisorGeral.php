<?php
//$cpfAgente = $_GET['cpfAgente'];
//$cpfSupervisor = $_GET['cpfSupervisor'];
//$nome = $_GET['nome'];
//$senha = $_GET['senha'];

require "conexao.php";

$cpfSupervisor = $_POST['cpfSupervisor'];
$nome_supervisor = utf8_encode(ucwords($_POST['nome_supervisor']));
$senha_supervisor = $_POST['senha_supervisor'];

//$conexao = mysql_connect('localhost','root','craquedacopa');
//mysql_select_db('android',$conexao);
/*$conexao = mysql_connect('localhost','wedsoncarlos','wedson123');
mysql_select_db('wedsoncarlos',$conexao);*/



$sql = "insert into supervisorGeral(cpfSupervisor, nome_supervisor,senha_supervisor) values ('$cpfSupervisor','$nome_supervisor','$senha_supervisor')";

$resultado = mysql_query($sql) or die ("Erro: ".mysql_error());
	if($resultado)
		echo "1";
	else
		echo 0;

?>