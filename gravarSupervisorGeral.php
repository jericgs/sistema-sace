<?php

require "conexao.php";

$cpfSupervisor = $_POST['cpfSupervisor'];
$nome_supervisor = utf8_encode(ucwords($_POST['nome_supervisor']));
$senha_supervisor = $_POST['senha_supervisor'];

$sql = "insert into supervisorGeral(cpfSupervisor, nome_supervisor,senha_supervisor) values ('$cpfSupervisor','$nome_supervisor','$senha_supervisor')";

$resultado = mysql_query($sql) or die ("Erro: ".mysql_error());
	if($resultado)
		echo "1";
	else
		echo 0;

?>