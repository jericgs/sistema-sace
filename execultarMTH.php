<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>SACE</title>
    </head>
    
    <body>
        <?php
        // put your code here
        
        // Áreas
        $codArea = '1';
        $numImoveisM = '2';
        $numAgenteN = '3';
        $fatorRA = '4';
        $diasAtenArea = '5';
        
        //Equipes
        $codEquipe = '6';
        $numAgentesEqp = '7';

        $command2 = "metaheuristicas\Test2.exe " . $codArea . " " . $numImoveisM . " " . $numAgenteN . " " . $fatorRA . " " . $diasAtenArea . " " . $codEquipe . " " . $numAgentesEqp . "";
       
        exec($command2);
        
        ?>
    </body>
</html>
