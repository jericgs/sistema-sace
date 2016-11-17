<html>
    <head>
        <title>SACE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>        
        
         <aside>
            
            <a href="realizarCronograma.php">REALIZAR CRONOGRAMA</a>    
            
        </aside>
        
    <center>
        <center>
        <h1>Adicionar areas</h1>   
       
        </center>
        
        <form action="executarFuzzy.php" method="post">             
           <!-- Digite o ID da area: <input type="number" name="idArea" size="8"><br>-->
            Digite um nome para a area: <select name="nomeArea">                                        
                    <option value="A1">A1</option> 
                    <option value="A2">A2</option> 
                    <option value="A3">A3</option> 
                    <option value="A4">A4</option> 
                    <option value="A5</">A5</option> 
                    <option value="A6">A6 </option> 
                    <option value="A7">A7</option> 
                    <option value="A8">A8</option> 
                    <option value="A9">A9 </option> 
                    <option value="A10">A10</option>     
            </select><br>    
            
            Digite o número aproximado de imoveis da area: <input type="number" name="numImoveis" size="8"><br>
            Numero de agente necessario para cobrir area<input type="number" name="numAgentes" size="8"><br> 
            Quantidade de focos da area: <input type="number" name="qf" size="8"><br> 
            Quantidade de depositos da area: <input type="number" name="qdep" size="8"><br> 
            Nivel de saneamento basico da area (0 a 10) 
                <select name="nsb">
                    <option value="Interface">NSB</option> 
                    <option value="0">0</option> 
                    <option value="1">1</option> 
                    <option value="2">2</option> 
                    <option value="3">3</option> 
                    <option value="4">4</option> 
                    <option value="5">5</option> 
                    <option value="6">6 </option> 
                    <option value="7">7</option> 
                    <option value="8">8</option> 
                    <option value="9">9 </option> 
                    <option value="10">10</option>                     
                </select><br>
            Digite a quantidade de dias necessarios para atender a area: <input type="num" name="qtDias" size="8"><br> 
            
                <input type="Submit" value="Adicionar "> 
                <input type="Reset" value="Limpar Dados"> 
        </form>
        
        
         <?php
              /*  session_start();        
                
                if(isset($_SESSION['confirmacao2'])){
                    $confirmacao2 = $_SESSION['confirmacao2'];
                    if($confirmacao2){
                        echo "Equipe salva com sucesso";
                    }
                }         
                
                $_SESSION['confirmacao2'] = 0;
                */

            ?>     
        <br>
        
        <h1>Adicionar equipes</h1><br>
        
        <form action="salvarEquipes.php" method="post">             
            Digite o codigo ou nome da equipe: <select name="cod_equipe">
                    <option value="Interface2">EQUIPES</option> 
                    <option value="E1">E1</option> 
                    <option value="E2">E2</option> 
                    <option value="E3">E3</option> 
                    <option value="E4">E4</option> 
                    <option value="E5">E5</option> 
                    <option value="E6">E6 </option> 
                    <option value="E7">E7</option> 
                    <option value="E8">E8</option> 
                    <option value="E9">E9 </option> 
                    <option value="E10">E10 </option>                     
                </select><br>
            Digite o tamanho da equipe (numero de agentes) <input type="number" name="num_agentes" size="8"><br>
            <input type="Submit" value="ADD">
        </form>   
        
        
        <h6>        
            
            <?php
                session_start();     
                
                if(isset($_SESSION['confirmation'])){
                    $confirmation = $_SESSION['confirmation'];
                    if($confirmation){
                        echo "Area salva com sucesso";
                    }
                }
                
                if(isset($_SESSION['confirmacao'])){
                    $confirmacao = $_SESSION['confirmacao'];
                    if($confirmacao){
                        echo "Equipe salva com sucesso";
                    }
                }         
                
                $_SESSION['confirmacao'] = 0;
                

            ?>     
        </h6>
        
    </center>         
        
    </body>
</html>