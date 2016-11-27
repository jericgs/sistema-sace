<?php

include 'conexao.php';
$query = mysql_query("SELECT cod_equipe,num_agentes FROM equipes");



while($valores = mysql_fetch_array($query)) {    
    echo "<option value=\"".$valores['cod_equipe']."\">".$valores['cod_equipe']."</option>";   
}



?>

