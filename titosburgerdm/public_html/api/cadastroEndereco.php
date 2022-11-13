<?php
// Pegando os dados pelo Ajax
include_once('CatalogoEndereco.php');

    $cep = $_POST['cep'];
    $mainEndereco = $_POST['mainEndereco'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

$enderecos = new CatalogoEndereco;
$enderecos->setCep($cep);
$enderecos->setEnderecoPrincipal($mainEndereco);
$enderecos->setLongradouro($logradouro);
$enderecos->setNumero($numero);
$enderecos->setComplemento($complemento);
$enderecos->setBairro($bairro);
$enderecos->setCidade($cidade);
$enderecos->setUf($uf);

echo "<pre>";
var_dump($enderecos);
echo "</pre>";
