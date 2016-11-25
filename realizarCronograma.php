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
           <li><a href="pagina_principal.php">Adicionar &Aacute;reas</a></li>
          <li><a href="adicionarEquipes.php">Adicionar Equipes</a></li>
          <li class="current"><a href="realizarCronograma.php">Realizar Cronograma</a></li>
          <li><a href="visualizarCronograma.php">Visualizar Cronograma</a></li>
          <li><a href="sobre.php">Sobre</a></li>	  
	</ul>
        
        <CENTER>   
        
        
        <form class="form-horizontal" action="realizarCronograma.php" method="post">
            <fieldset>               

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">N&uacute;mero de areas do cronograma</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="areas_cro" type="number" placeholder="Número de áreas" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">N&uacute;mero de equipes para o cronograma</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="equipes_cro" type="number" placeholder="Número de equipes" class="form-control input-md">
                    </div>
                </div>

                <!-- Button -->
                <CENTER>
                    <input class="btn btn-primary" type="Submit" value="Confirmar ">                                
                </CENTER>

            </fieldset>
        </form>
        
        
       <?php
       
       session_start();
       include 'conexao.php';
       
       if (isset($_POST['areas_cro']) && isset($_POST['equipes_cro'])) {
           
           $areas = $_POST['areas_cro'];
           $equipes = $_POST['equipes_cro'];  
           
           $_SESSION['selectAreas'] = $areas;
           $_SESSION['selectEquipes'] = $equipes;
           
           
           $id = 0;
           $id2 = 0; 
           $query = mysql_query("SELECT nomeArea FROM dadosformulario");
           
           echo '<form action="exibirCrograma.php" method="POST">';   
           
           if($areas>0 && $equipes>0){
               
               //------laço para as areas
               for($i=0;$i<$areas;$i++){
               
                    echo "<select class=\"form-control\" id=\"".$id++."\" name=\"opcoesAreas".$i."\" >"
                         . "   <option>&Aacutereas...</option>";

                         include 'pegarAreas.php';           

                    echo "</select>";
               }
                
                //-----------laço para as equipes
                for($j=0;$j<$equipes;$j++){

                    echo "<select class=\"form-control\" id=\"".$id2++."\" name=\"opcoesEquipes".$j."\">"
                         . "<option>Equipes...</option>";

                         include 'pegarEquipes.php';           

                    echo "</select>";
                 
                }          
                
               
           }else{
               echo 'Entrada invalida';
           }
           
           echo '<br><br><input class="btn btn-primary" type="submit" value="Gerar" />';
           echo '</form>';
       
       }
       
       ?>
       </CENTER>
        
    </body>
</html>