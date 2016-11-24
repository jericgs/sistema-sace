<?php

    session_start();

    if(isset($_POST['nomeArea'])&&isset($_POST['numImoveis'])&&isset($_POST['numAgentes'])&&isset($_POST['qf'])&&
       isset($_POST['qdep'])&&isset($_POST['nsb'])&&isset($_POST['qtDias'])){
        
        $nomeArea = $_POST['nomeArea'];
        //echo $nomeArea."<br>";

        $numImoveis = $_POST['numImoveis'];
        //echo $numImoveis."<br>";

        $numAgentes = $_POST['numAgentes'];
        //echo $numAgentes."<br>";

        $qf = $_POST['qf'];
        //echo $qf."<br>";

        $qdep = $_POST['qdep'];
        //echo $qdep."<br>";

        $nsb = $_POST['nsb'];
        //echo $nsb."<br>";

        $qtDias = $_POST['qtDias'];
        // echo $qtDias."<br>";
        
    }else{
        echo "Variavel nao setada";
    }    

    $data = date('Y/m/d');
    //d-m-Y    
    $hora = date('H:i:s');
    //H:i:s

    $command2 = "fuzzy\processamento.exe ".$nomeArea." ".$numImoveis." ".$numAgentes." ".$qf." ".$qdep." ".$nsb." ".$qtDias." ".$data." ".$hora."";

    exec($command2);
    
    $_SESSION['confirmation'] = 1;
    header("Location:pagina_principal.php");
    
    

//Rodando inferencia fuzzy

?>

