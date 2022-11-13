<?php
// Pegando os dados pelo Ajax
include_once('Usuarios.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['dataNasc'];
    $genero = $_POST['genero'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

$usuarios = new Usuarios;
$usuarios->setNome($nome);
$usuarios->setSobrenome($sobrenome);
$usuarios->setData($data);
$usuarios->setGenero($genero);
$usuarios->setCpf($cpf);
$usuarios->setRg($rg);

echo "<pre>";
var_dump($usuarios);
echo "</pre>";
