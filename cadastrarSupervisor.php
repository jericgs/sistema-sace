
<html>
    <head>
        <title>Cadastrar Supervisor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>        
        
    <center>
        <marquee behavior=slide direction=right><h1>Tela de cadastro de supervisor</h1></marquee>
        
        <br><h3> Falta tratar os campos</h3>
        
        <form action="processaCadastro.php" method="post"> 
            
            Nome: <input type="Text" name="nome_supervisor" size="40"><br> 
            CPF: <input type="text" name="cpfSupervisor" size="8"><br>
            Senha: <input type="password" name="senha_supervisor" size="8"> 
            Confirmar Senha: <input type="password" name="ConfirmarSenha" size="8"><p>            
                <input type="Submit" value="Cadastrar "> 
                <input type="Reset" value="Limpar Dados"> 
        </form>
        
        <?php
                session_start();        
                
                if(isset($_SESSION['confirmaCadastro'])){
                    $confirmacao = $_SESSION['confirmaCadastro'];
                    if($confirmacao){
                        echo "Equipe salva com sucesso";
                    }
                }         
                
                $_SESSION['confirmacao'] = 0;
                

        ?>     
        
    </center>
            
        
        
            
        
    </body>
</html>
