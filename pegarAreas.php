<?php

include 'conexao.php';
$query = mysql_query("SELECT idArea,nomeArea FROM dadosformulario");

/*echo '<form name="produto" method="post" action="">
 <label for="">Selecione um produto</label>
 <select>';*/

while($valores = mysql_fetch_array($query)) {    
    echo "<option value=\"".$valores['nomeArea']."\">".$valores['nomeArea']."</option>";   
}

/*echo '</select>'
    . '</form>';*/

?>

