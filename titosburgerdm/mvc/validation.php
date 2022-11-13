<?php
    require 'connect.php';
    include_once("../public_html/configs/global.php");
 
    //VERIFICA SE HOUVE post E DO USUARIO OU A SENHA ESTÁ VAZIO

    if((!empty($_POST)) && (empty($_POST['login-user']) || empty($_POST['pass-user']))){
        $resp = "Digite o usuário e a senha!";
    }else{
                $loginUser = $_POST['login-user'];
                $passUser = $_POST['pass-user'];

                $consultQuery = "SELECT 'nome_usuario', 'senha_usuario' FROM tb_usuario WHERE nome_usuario = '$loginUser' AND senha_usuario = '$passUser'";
                if($resultSQL = mysqli_query($conn, $consultQuery)){
                    if(mysqli_num_rows($resultSQL) > 0){


                        while($rowUser = $resultSQL->fetch_array()){
                            $rowUser[] = $rowUser;
                            
                            $loginUser1 = $rowUser['nome_usuario'];
                            $passUser1 = $rowUser['senha_usuario'];

                            setcookie("loginUser", $loginUser1);
                            setcookie("passUser", $passUser1);

                            session_start();
                            $_SESSION['loginUserSe'] = $loginUser1;
                            $_SESSION['passUserSe'] = $passUser1;

                            header("location:../public_html/dashboard.php");
                        }
                        }else{
                            $resp = "ERRO - usuario ou senha invalidos";
                        }
                }else{
                    $resp = "ERRO ao Consultar";
                }
    }

    $conn->close();
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../public_html/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public_html/assets/css/fonts.css">
    <link rel="stylesheet" href="../public_html/assets/css/colors.css">
    <link rel="stylesheet" href="../public_html/assets/css/adminStyle.css">

</head>
<body>
<div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>
                <h4><?=$resp?></h4>

                <form action="../mvc/validation.php" method="post" class="form-login">
                    <div class="py-2">
                        <input type="text" class="form-control" placeholder="Usuário" name="login-user">
                    </div>
                    <div class="py-2">
                        <input type="password" class="form-control" placeholder="Senha" name="pass-user">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-titos" href="dashboard.php">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
