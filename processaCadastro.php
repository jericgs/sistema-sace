<?php

    include 'conexao.php';
    if (isset($_POST['cpfSupervisor'])&&isset($_POST['nome_supervisor'])&&isset($_POST['senha_supervisor'])){

        $nome_supervisor = $_POST['nome_supervisor'];
        $senha_supervisor = $_POST['senha_supervisor'];  
        $cpfSupervisor = $_POST['cpfSupervisor'];

        $sql = "insert into supervisorgeral(cpfSupervisor,nome_supervisor, senha_supervisor)values('$cpfSupervisor','$nome_supervisor','$senha_supervisor')";

        $resultado = mysql_query($sql) or die("Erro: " . mysql_error());

            if($resultado){
                $_SESSION['confirmaCadastro'] = 1; 
                header("Location:cadastrarSupervisor.php");
            }else{
                $_SESSION['confirmaCadastro'] = 0;
                header("Location:cadastrarSupervisor.php");
            }
    }else{
        echo 'não setou';
    }
    
?>

