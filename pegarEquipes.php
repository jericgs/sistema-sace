<?php

include 'conexao.php';
$query = mysql_query("SELECT cod_equipe,num_agentes FROM equipes");

/*echo '<form name="produto" method="post" action="">
 <label for="">Selecione um produto</label>
 <select>';*/

while($valores = mysql_fetch_array($query)) {    
    echo "<option value=\"".$valores['cod_equipe']."\">".$valores['cod_equipe']."</option>";   
}

/*echo '</select>'
    . '</form>';*/

?>

