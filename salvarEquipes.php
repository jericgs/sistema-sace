<?php

session_start();

    require "conexao.php";   
    
/*    if(isset($_POST['idArea'])&&isset($_POST['nomeArea'])&&isset($_POST['numImoveis'])&&isset($_POST['numAgentes'])&&
       isset($_POST['qf'])&&isset($_POST['qdep'])&&isset($_POST['nsb'])){
        
        $idArea = $_POST['idArea'];
        $nomeArea = $_POST['nomeArea'];
        $numImoveis = $_POST['numImoveis'];
        $numAgentes = $_POST['numAgentes'];
        $qf = $_POST['qf'];
        $qdep = $_POST['qdep'];
        $nsb = $_POST['nsb'];
        
        $sql2 = "insert into equipes(idArea,nomeArea,numImoveis,numAgentes,qf,qdep,nsb)values"
                . " ('$idArea','$nomeArea','$numImoveis','$numAgentes','$qf','$qdep','$nsb')";
        
        
        $resultado2 = mysql_query($sql2) or die("Erro: " . mysql_error());

       if($resultado2){
           
           echo $resultado2;           
           echo $idArea;
           echo $nomeArea;
           echo $numImoveis;
           echo $numAgentes;
           echo $qf;
           echo $qdep;
           
           for ($i = 0; $i < count($areas); $i++) {
               
            echo "<br> areas " . $i . ": " . $areas[$i];
            
           }


        //   $_SESSION['confirmacao2'] = 1; 
           // header("Location:pagina_principal.php");
        }else{
            echo 'Falhou';
//            $_SESSION['confirmacao2'] = 0;
  //          header("Location:pagina_principal.php");
        }
        
        
    }*/
    if (isset($_POST['cod_equipe']) && isset($_POST['num_agentes'])) {

        $cod_equipe = $_POST['cod_equipe'];
        $num_agentes = $_POST['num_agentes'];
        $sql = "insert into equipes(cod_equipe, num_agentes)values ('$cod_equipe','$num_agentes')";

        $resultado = mysql_query($sql) or die("Erro: " . mysql_error());

        if($resultado){
            $_SESSION['confirmacao'] = 1; 
            header("Location:pagina_principal.php");
        }else{
            $_SESSION['confirmacao'] = 0;
            header("Location:pagina_principal.php");
        }
    }
?>

