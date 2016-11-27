<html lang="pt">
    
    <?php
    
        include 'conexao.php';
    
    ?>
    <head>
            <meta charset="UTF-8">
            <title>SACE</title>
            <link href="assets/css/estrutura.css" rel="stylesheet">
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link rel="icon" type="image/png" href="assets/imgs/icon.png"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">
                 #content{
                     width: 65%;
                     height: 65%;                 
                     top: 0; 
                     bottom: 0;
                     left: 0; 
                     right: 0;
                     margin: auto;                 
                 }
             </style>

    </head>
    <body>

            <ul class="snip1189">
                <li><a href="pagina_principal.php">Adicionar &Aacute;reas</a></li>
              <li><a href="adicionarEquipes.php">Adicionar Equipes</a></li>
              <li><a href="realizarCronograma.php">Realizar Cronograma</a></li>
              <li class="current"><a href="visualizarCronograma.php">Visualizar Cronogramas</a></li>
              <li><a href="sair.php">Sair</a></li>	  
            </ul>
        <br><br>
        
         <div class="container" id="content">
            
            <div class="panel-group" id="accordion">
                
                <?php
                $query = mysql_query("SELECT DISTINCT data,hora FROM cronograma");
                $cont = 1;

                while ($valores = mysql_fetch_array($query)) {                    

                    echo "<div class=\"panel panel-default\">                    
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse".$cont."\">"."Cronograma ".$cont . " "." ".$valores['data'] . " " . $valores['hora'] . "</a>
                        </h4>
                    </div>
                    <div id=\"collapse".$cont."\" class=\"panel-collapse collapse\">".
                       "<div class=\"panel-body\">";
                    
                    $equipesQuery = mysql_query("SELECT DISTINCT codEqp FROM cronograma WHERE data='".$valores['data']."' and hora ='".$valores['hora']."'");
                    while($equipes = mysql_fetch_array($equipesQuery)){
                        $query2 = mysql_query("SELECT * FROM cronograma WHERE data='".$valores['data']."' and hora ='".$valores['hora']."' and codEqp='".$equipes['codEqp']."'");
                        $totalDias = mysql_query("SELECT MAX(diasAtend) FROM cronograma WHERE data='".$valores['data']."' and hora ='".$valores['hora']."' and codEqp='".$equipes['codEqp']."'");
                        $totalfr = mysql_query("SELECT SUM(fatorRisco) FROM cronograma WHERE data='".$valores['data']."' and hora ='".$valores['hora']."' and codEqp='".$equipes['codEqp']."'");
                        $resultado = mysql_fetch_row($totalDias);
                        $frtotal = mysql_fetch_row($totalfr);
                        
                        echo "<div class=\"table-responsive\">"
                                . "<table class=\"table\">"
                            . "<thead>
                                <tr>
                                  <th>#</th>
                                  <th>Equipe</th>
                                  <th>&Aacute;rea</th>
                                  <th><a href=\"#\" data-toggle=\"popover\" title=\"Total de dias desse cronograma\" data-content=\"".$resultado[0]."\">Dias de Atendimento</a></th>
                                  <th><a href=\"#\" data-toggle=\"popover\" title=\"Fator de Risco Total\" data-content=\"".$frtotal[0]."\">Fator de Risco</a></th>
                                  <th>Data de Criação</th>
                                </tr>
                              </thead>
                              <script>
                                    $(document).ready(function(){
                                    $('[data-toggle=\"popover\"]').popover();   
                                    });
                              </script>";
                        while($valores2 = mysql_fetch_array($query2)){
                        echo"<tbody>". 
                                "<tr>".
                                    "<td>".$valores2['ordem']."</td>".
                                    "<td>".$valores2['codEqp']."</td>". 
                                    "<td>".$valores2['area']."</td>".
                                    "<td>".$valores2['diasAtend']."</td>".
                                    "<td>".$valores2['fatorRisco']."</td>".
                                    "<td>".$valores2['data'].
                                "</tr>".
                            "</tbody>";                
                        }
                        
                        
                    }          
                    
                    echo    "</table>
                            </div>
                        </div>
                    </div>
                </div>";
                    $cont++;                            
                        
                }
                ?>
            </div> 
        </div> 
    </body>
</html>