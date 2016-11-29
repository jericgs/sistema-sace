<?php    
    //session_start();
    include 'conexao.php';
    
    
//    $nameAreas = 'arquivo/areas.txt';
//    $nameEquipe = 'arquivo/equipes.txt';
//    //$text = 'alguma coisa';
//    $fileAreas = fopen($nameAreas,'w+');
//    $fileEquipes = fopen($nameEquipe,'w+');
    

    $valoresAreas = array();
    $valoresEquipes = array();
    
    foreach ($_POST as $campo => $valor) { 
        $$campo = $valor;       
        if(substr($$campo,0,1)=='A'){            
            array_push($valoresAreas, $$campo);
            //echo 'entrou no primeiro IF <br>';            
        }else if(substr($$campo,0,1)=='E'){            
            array_push($valoresEquipes, $$campo);
            //echo 'entrou no segundo IF <br>';
        }        
        
    }          
    
    
    //----------IMPRIME AS AREAS-----
    $query = array();
    $arrayAreas = array();
    
    for($i = 0;$i<count($valoresAreas);$i++){
        $query[$i] = mysql_query("SELECT nomeArea,numImoveis, numAgentes,fator_risco,qtDias FROM dadosformulario WHERE nomeArea= '".
            $valoresAreas[$i]."'");        
    }    
    
    $stringAreas = "";
    
    for($j = 0;$j< count($valoresAreas);$j++){
        
        //$stringTotal = $stringAreas.
        
        while ($valoresAreasRecebidos = mysql_fetch_array($query[$j])) {
            
            /*$stringAreas .=  $valoresAreasRecebidos['nomeArea']."/".$valoresAreasRecebidos['numImoveis']."/"
                           .$valoresAreasRecebidos['numAgentes']."/".$valoresAreasRecebidos['fator_risco']."/"
                           .$valoresAreasRecebidos['qtDias']."#";*/
            $stringAreas .=  $valoresAreasRecebidos['nomeArea']." ".$valoresAreasRecebidos['numImoveis']." "
                           .$valoresAreasRecebidos['numAgentes']." ".$valoresAreasRecebidos['fator_risco']." "
                           .$valoresAreasRecebidos['qtDias']."\n";    
            
            
            
//            array_push($arrayAreas, $valoresAreasRecebidos['nomeArea']);
//            array_push($arrayAreas, $valoresAreasRecebidos['numImoveis']);
//            array_push($arrayAreas, $valoresAreasRecebidos['numAgentes']);
//            array_push($arrayAreas, $valoresAreasRecebidos['fator_risco']);
//            array_push($arrayAreas, $valoresAreasRecebidos['qtDias']);

            /*echo $valoresAreasRecebidos['nomeArea'] . " " . $valoresAreasRecebidos['numImoveis'] . " "
            . $valoresAreasRecebidos['numAgentes'] . " " . $valoresAreasRecebidos['fator_risco'] . " "
            . $valoresAreasRecebidos['qtDias']."<br>";*/
        }        
    }
    
    //fwrite($fileAreas, $stringAreas);
//    fclose($fileAreas);
    
    /*for($w = 0;$w<count($arrayAreas);$w++){
        echo "areas[".$w."] = ".$arrayAreas[$w]."<br>";
    }*/
    
    echo "String Areas= ".$stringAreas;
    
    //-------------IMPRIME AS EQUIPES------
    
    $query2 = array();
    $arrayEquipes = array();
    
    for($k = 0;$k<count($valoresEquipes);$k++){
        $query2[$k] = mysql_query("SELECT cod_equipe, num_agentes FROM equipes WHERE cod_equipe= '".
            $valoresEquipes[$k]."'");        
    }      
    
    $stringEquipes = "";
    
    for($l = 0;$l<count($valoresEquipes);$l++){
        
        while($valoresEquipesRecebidos = mysql_fetch_array($query2[$l])) {
            
            
              //$stringEquipes .= $valoresEquipesRecebidos['cod_equipe']."/".$valoresEquipesRecebidos['num_agentes']."#";
              $stringEquipes .= $valoresEquipesRecebidos['cod_equipe']." ".$valoresEquipesRecebidos['num_agentes']."\n";
//            array_push($arrayEquipes, $valoresEquipesRecebidos['cod_equipe']);
//            array_push($arrayEquipes, $valoresEquipesRecebidos['num_agentes']);
            
//            echo $valoresEquipesRecebidos['cod_equipe']." ".$valoresEquipesRecebidos['num_agentes'];             
              
              
        }
        
    }   
    
    //fwrite($fileEquipes, $stringEquipes);
    
//    fclose($fileEquipes);
    
    /*for($t = 0;$t<count($arrayEquipes);$t++){
        echo "equipes[".$t."] = ".$arrayEquipes[$t]."<br>";
    }*/
    
    echo "<BR><BR>";
    echo "String Equipes = ".$stringEquipes;
    echo "<BR><BR>";
    
    $data = date('Y/m/d');
        //d-m-Y    
    $hora = date('H:i:s');
        //H:i:s
    
    echo "<br>";
    echo $data."<br>";
    echo $hora;
    
    /*$name = 'arquivo/arquivo.txt';
    $text = 'alguma coisa';
    $file = fopen($name,'a');
    fwrite($file, $text);
    fclose($file);*/



//$command2 = "metaheuristicas\testeToken.exe " . $stringAreas . " " . $stringEquipes . " " . $data . " " . $hora . "";
    $command2 = "metaheuristicas\Cronograma.exe ";       
    exec($command2);
    echo "<script>alert(\"Cronograma gerado e salvo com sucesso\")</script>";        
    echo "<script language = \"JavaScript\">location.href = \"realizarCronograma.php\"</script>";
?>