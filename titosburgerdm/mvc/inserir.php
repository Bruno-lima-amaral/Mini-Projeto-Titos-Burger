<?php
require "connect.php";

    // $name = "Bruno";
    // $email = "52joseguerreiro@gmail.com";
    // $pass = "Tito@302010";
    // $hash = "HomemHetero2424";
    // $idACL = "1";
    // $idStatus = "2";
    // $idGenero = "1";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['dataNasc'];
    $genero = $_POST['genero'];
    $tipoPersona = $_POST['tipoPersona']
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];


  
    $querySelect = $conn->query("SELECT * FROM tb_usuario WHERE nome_usuario = '$nome' OR email_usuario = '$email'");
        if(mysqli_num_rows($querySelect) > 0){
            $resp = "<h1>Usuario ou email já cadastrados<h1>";
        }else{

            $querySQL = "INSERT INTO tb_usuario (
                nome_usuario, email_usuario, senha_usuario, hash,
                id_acl, id_status, id_genero
            )VALUES(
                '$name', '$email', '$pass', '$hash', '$idACL', '$idStatus',
                '$idGenero'
            )";
            if($conn->query($querySQL) === TRUE){
                $resp = "<h1>Dados Gravados Com Sucesso!</h1>";
                
            }else{
                $resp = "<h1>ERRO - dados não inseridos</h1>";
                
            };
        };
        echo $resp;

    $conn->close();
?>