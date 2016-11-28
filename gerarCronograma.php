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
    $arrayAreas = array();
    
    for($i = 0;$i<count($valoresAreas);$i++){
        $query[$i] = mysql_query("SELECT nomeArea,numImoveis, numAgentes,fator_risco,qtDias FROM dadosformulario WHERE nomeArea= '".
            $valoresAreas[$i]."'");        
    }    
    
    
    for($j = 0;$j< count($valoresAreas);$j++){
        
        while ($valoresAreasRecebidos = mysql_fetch_array($query[$j])) {
            
            array_push($arrayAreas, $valoresAreasRecebidos['nomeArea']);
            array_push($arrayAreas, $valoresAreasRecebidos['numImoveis']);
            array_push($arrayAreas, $valoresAreasRecebidos['numAgentes']);
            array_push($arrayAreas, $valoresAreasRecebidos['fator_risco']);
            array_push($arrayAreas, $valoresAreasRecebidos['qtDias']);

            /*echo $valoresAreasRecebidos['nomeArea'] . " " . $valoresAreasRecebidos['numImoveis'] . " "
            . $valoresAreasRecebidos['numAgentes'] . " " . $valoresAreasRecebidos['fator_risco'] . " "
            . $valoresAreasRecebidos['qtDias']."<br>";*/
        }        
    }
    
    for($w = 0;$w<count($arrayAreas);$w++){
        echo "areas[".$w."] = ".$arrayAreas[$w]."<br>";
    }
    
    //-------------IMPRIME AS EQUIPES------
    
    $query2 = array();
    $arrayEquipes = array();
    
    for($k = 0;$k<count($valoresEquipes);$k++){
        $query2[$k] = mysql_query("SELECT cod_equipe, num_agentes FROM equipes WHERE cod_equipe= '".
            $valoresEquipes[$k]."'");        
    }      
    
    for($l = 0;$l<count($valoresEquipes);$l++){
        
        while($valoresEquipesRecebidos = mysql_fetch_array($query2[$l])) {
            
            array_push($arrayEquipes, $valoresEquipesRecebidos['cod_equipe']);
            array_push($arrayEquipes, $valoresEquipesRecebidos['num_agentes']);
            
//            echo $valoresEquipesRecebidos['cod_equipe']." ".$valoresEquipesRecebidos['num_agentes'];
        }
    }   
    
    for($t = 0;$t<count($arrayEquipes);$t++){
        echo "equipes[".$t."] = ".$arrayEquipes[$t]."<br>";
    }
    
    $data = date('Y/m/d');
        //d-m-Y    
    $hora = date('H:i:s');
        //H:i:s
    
    echo "<br>";
    echo $data."<br>";
    echo $hora;
    
    // Áreas
//        $codArea = '1';
//        $numImoveisM = '2';
//        $numAgenteN = '3';
//        $fatorRA = '4';
//        $diasAtenArea = '5';
//        
//        //Equipes
//        $codEquipe = '6';
//        $numAgentesEqp = '7';

        $command2 = "metaheuristicas\Test2.exe " . $arrayAreas . " " . $arrayEquipes . " " . $data . " " . $hora . "";
       
        exec($command2);
?>