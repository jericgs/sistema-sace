<html>
    <head>
        <title>SACE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>     
        
        <form action="realizarCronograma.php" method="post">                         
            N&uacute;mero de areas do cronograma: <input type="number" name="areas_cro" size="5"><br>
            N&uacute;mero de equipes para o cronograma:<input type="number" name="equipes_cro" size="5"><br>
            <input type="Submit" value="Confirmar">            
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
           
           echo '<form action="teste.php" method="POST">';   
           
           if($areas>0 && $equipes>0){
               
               //------laço para as areas
               for($i=0;$i<$areas;$i++){
               
                    echo "<select  id=\"".$id++."\" name=\"opcoesAreas".$i."\" >"
                         . "   <option>&Aacutereas...</option>";

                         include 'pegarAreas.php';           

                    echo "</select>";
               }
                
                //-----------laço para as equipes
                for($j=0;$j<$equipes;$j++){

                    echo "<select id=\"".$id2++."\" name=\"opcoesEquipes".$j."\">"
                         . "<option>Equipes...</option>";

                         include 'pegarEquipes.php';           

                    echo "</select>";
                 
                }          
                
               
           }else{
               echo 'Entrada invalida';
           }
           
           echo '<br><br><input type="submit" value="Gerar" />';
           echo '</form>';
       
       }
       
       ?>
        
    </body>
</html>