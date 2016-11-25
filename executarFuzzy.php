<html lang="pt">
    <head>
            <meta charset="UTF-8">
            <title>SACE</title>
            <link href="assets/css/estrutura.css" rel="stylesheet">
            <link href="assets/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>
        
        <?php
        session_start();

        if (!isset($_POST['nomeArea'])) {
            echo 'nome area não setada';
        }
        if (!isset($_POST['numImoveis'])) {
            echo 'numImoveis não setada';
        }

        if (!isset($_POST['numAgentes'])) {
            echo 'numAgentes não setada';
        }
        if (!isset($_POST['qf'])) {
            echo 'qf não setada';
        }
        if (!isset($_POST['qdep'])) {
            echo 'qdep não setada';
        }
        if (!isset($_POST['nsb'])) {
            echo 'nsb não setada';
        }
        if (!isset($_POST['qtDias'])) {
            echo 'qtDias não setada';
        }


        if (isset($_POST['nomeArea']) && isset($_POST['numImoveis']) && isset($_POST['numAgentes']) && isset($_POST['qf']) &&
                isset($_POST['qdep']) && isset($_POST['nsb']) && isset($_POST['qtDias'])) {

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
        } else {
            echo "Variavel nao setada";
        }

        $data = date('Y/m/d');
        //d-m-Y    
        $hora = date('H:i:s');
        //H:i:s

        $command2 = "fuzzy\processamento.exe " . $nomeArea . " " . $numImoveis . " " . $numAgentes . " " . $qf . " " . $qdep . " " . $nsb . " " . $qtDias . " " . $data . " " . $hora . "";
        
        set_time_limit(45);
        exec($command2);

        //$_SESSION['confirmation'] = 1;
        
        echo "<script>alert(\"Dados adicionados com sucesso\")</script>";        
        echo "<script language = \"JavaScript\">location.href = \"pagina_principal.php\"</script>";
        
        //header("Location:pagina_principal.php");
        //Rodando inferencia fuzzy

    ?>  

    </body>
</html>



