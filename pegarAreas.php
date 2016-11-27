<?php

include 'conexao.php';
$query = mysql_query("SELECT idArea,nomeArea FROM dadosformulario");

while($valores = mysql_fetch_array($query)) {    
    echo "<option value=\"".$valores['nomeArea']."\">".$valores['nomeArea']."</option>";   
}

?>

