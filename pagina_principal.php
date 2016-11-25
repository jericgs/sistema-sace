<html>
    <head>
        <title>SACE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="assets/css/estrutura.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>        
        
       <ul class="snip1189">
           <li class="current"><a href="pagina_principal.php">Adicionar &Aacute;reas</a></li>
          <li><a href="adicionarEquipes.php">Adicionar Equipes</a></li>
          <li><a href="realizarCronograma.php">Realizar Cronograma</a></li>
          <li><a href="visualizarCronograma.php">Visualizar Cronograma</a></li>
          <li><a href="sobre.php">Sobre</a></li>	  
	</ul>
         
        
    <center>        
     
        
        <form class="form-horizontal" action="executarFuzzy.php" method="post">
            <fieldset>               

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Escolha um identificador para a &aacute;rea</label>
                    <div class="col-md-2">
                        <select id="selectbasic" name="nomeArea" class="form-control">
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
                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">N&uacute;mero de im&oacute;veis da &aacute;rea</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="numAgentes" type="number" placeholder="Número de imóveis da área" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">N&uacute;mero de agentes para a &aacute;rea</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="numAgentes" type="number" placeholder="Número de agentes para a área" class="form-control input-md">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Quantidade de focos da &aacute;rea</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="qf" type="number" placeholder="Quantidade de focos da área" class="form-control input-md">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Quantidade de dep&oacute;sitos da &aacute;rea</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="qdep" type="number" placeholder="Quantidade de depósitos da área" class="form-control input-md">
                    </div>
                </div>
                
                 <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">N&iacute;vel de saneamento b&aacute;sico da &aacute;rea</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="nsb" class="form-control">
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
                        </select>
                    </div>
                </div>
                 
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Quantidade de dias necess&aacute;rios para atender a &aacute;rea</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="qtDias" type="number" placeholder="Quantidade de dias" class="form-control input-md">
                    </div>
                </div>               

               
                            <CENTER>
                                <input class="btn btn-primary" type="Submit" value="Adicionar ">                                
                            </CENTER>                     
                      

            </fieldset>
        </form> 
            
        
        <h6>        
            
            <?php
                //session_start();     
                
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