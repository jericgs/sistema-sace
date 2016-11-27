<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>SACE</title>
        <link href="assets/css/estrutura.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="assets/imgs/icon.png"/>

</head>
<body>

	<ul class="snip1189">
            <li ><a href="pagina_principal.php">Adicionar &Aacute;reas</a></li>
          <li class="current"><a href="adicionarEquipes.php">Adicionar Equipes</a></li>
          <li><a href="realizarCronograma.php">Realizar Cronograma</a></li>
          <li><a href="visualizarCronograma.php">Visualizar Cronogramas</a></li>
          <li><a href="sair.php">Sair</a></li>	  
	</ul>
        <br><br>
    
    <form class="form-horizontal" action="salvarEquipes.php" method="post">
        <fieldset>           

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Escolha um c&oacute;digo para a equipe</label>
                <div class="col-md-2">
                    <select id="selectbasic" name="cod_equipe" class="form-control">
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
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Digite o tamanho da equipe (n&uacute;mero de agentes)</label>  
                <div class="col-md-4">
                    <input id="textinput" name="num_agentes" type="number" placeholder="Digite o tamanho da equipe (número de agentes)" class="form-control input-md">
                    
                </div>
            </div>

            <!-- Button -->
            <CENTER>
                <input class="btn btn-primary" type="Submit" value="Adicionar ">                                
            </CENTER>>

        </fieldset>
    </form>	
</body>
</html>