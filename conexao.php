<?php 

$conexao = mysql_connect("localhost", "root", "");
mysql_select_db('test',$conexao);
mysql_set_charset("UTF8", $conexao);

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>

