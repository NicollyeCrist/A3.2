<?php

session_start();
include('validalogin.php');

$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';

$url = file_get_contents('https://www.receitaws.com.br/v1/cnpj/'.$cnpj);

$dados = json_decode($url);
var_dump($dados);

?>
