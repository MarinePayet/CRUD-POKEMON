<?php
require 'DataBase.php';

$db = new Database('PokmonCrud');
$datas = $db->query('SELECT * FROM Pokemon');
var_dump($datas);

?>
