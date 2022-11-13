<?php
// Pegando os dados pelo Ajax
include_once('Usuarios.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $data = $_POST['dataFun'];
    $razaoSocial = $_POST['razaoSocial'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $cnpj = $_POST['cnpj'];
    $inscricaoEstadual = $_POST['inscricaoEstadual'];
    $inscricaoMunicipal = $_POST['inscricaoMunicipal'];
    $isInMunicipal = $_POST['isInMunicipal'];

$usuarios = new Usuarios;
$usuarios->setNome($nome);
$usuarios->setSobrenome($sobrenome);
$usuarios->setGenero($genero);
$usuarios->setData($data);
$usuarios->setRazaoSocial($razaoSocial);
$usuarios->setNomeFantasia($nomeFantasia);
$usuarios->setCnpj($cnpj);
$usuarios->setIe($inscricaoEstadual);
$usuarios->setIm($inscricaoMunicipal);
$usuarios->setIsim($isInMunicipal);

echo "<pre>";
var_dump($usuarios);
echo "</pre>";
