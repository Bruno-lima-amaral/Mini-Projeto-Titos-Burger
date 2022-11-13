<?php
// Pegando os dados pelo Ajax 
require "../mvc/connect.php";
include_once("cliente.php");
include_once('Usuarios.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['dataNasc'];
    $genero = $_POST['genero'];
    $minhalista = $_POST['minhalista']
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];



$usuarios = new Usuarios;                  

$usuarios->setNome($nome);                 

$usuarios->setSobrenome($sobrenome);       

$usuarios->setData($data);                 

$usuarios->setGenero($genero);             

$usuarios->setTipoPersona($minhalista);    

$usuarios->setCpf($cpf);                   

$usuarios->setRg($rg);                   

echo "<pre>";
var_dump($usuarios[0]);
echo "</pre>";


