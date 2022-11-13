<?php
// Pegando os dados pelo Ajax
include_once('CatalogoContato.php');

    $idContato = $_POST['tipoContato'];
    $contato = $_POST['contato'];

$contatos = new CatalogoContato;
$contatos->setIdContato($idContato);
$contatos->setContato($contato);

echo "<pre>";
var_dump($contatos);
echo "</pre>";
