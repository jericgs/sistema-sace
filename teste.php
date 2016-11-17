<?php    
    //session_start();
    include 'conexao.php';

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
    
    for($i = 0;$i<count($valoresAreas);$i++){
        $query[$i] = mysql_query("SELECT nomeArea,numImoveis, numAgentes,fator_risco,qtDias FROM dadosformulario WHERE nomeArea= '".
            $valoresAreas[$i]."'");        
    }    
    
    
    for($j = 0;$j< count($valoresAreas);$j++){
        
        while ($valoresAreasRecebidos = mysql_fetch_array($query[$j])) {

            echo $valoresAreasRecebidos['nomeArea'] . " " . $valoresAreasRecebidos['numImoveis'] . " "
            . $valoresAreasRecebidos['numAgentes'] . " " . $valoresAreasRecebidos['fator_risco'] . " "
            . $valoresAreasRecebidos['qtDias']."<br>";
        }
    }
    //-------------IMPRIME AS EQUIPES------
    
    $query2 = array();
    
    for($k = 0;$k<count($valoresEquipes);$k++){
        $query2[$k] = mysql_query("SELECT cod_equipe, num_agentes FROM equipes WHERE cod_equipe= '".
            $valoresEquipes[$k]."'");        
    }      
    
    for($l = 0;$l<count($valoresEquipes);$l++){
        
        while($valoresEquipesRecebidos = mysql_fetch_array($query2[$l])) {
            echo $valoresEquipesRecebidos['cod_equipe']." ".$valoresEquipesRecebidos['num_agentes']."<br>";
        }
    }
    
    
    
    
    
    
    
    
            
    
?>

