<?php 
require "connect.php";

session_start();
$loginUser  = $_SESSION['loginUserSe'];
$passUser  = $_SESSION['passUserSe'];

setcookie("loginUser", $loginUser);
setcookie("passUser", $passUser);

if(isSet($_COOKIE["loginUser"])){
    $loginUser1 = $_COOKIE['loginUser'];
}
if(isSet($_COOKIE["passUser"])){
    $passUser1 = $_COOKIE['passUser'];
}

if(empty($loginUser) OR empty($passUser)){

    $consultQuery = "SELECT 'nome_usuario', 'senha_usuario' FROM tb_usuario WHERE nome_usuario = '$loginUser' AND senha_usuario = '$passUser'";

    if($resultSQL = mysqli_query($conn, $consultQuery)){
        if(mysqli_num_rows($resultSQL) == 0){
            setcookie("loginUser");
            setcookie("passUser");
            header("location:index.php");
            exit;
        }
    }else{
        setcookie("loginUser");
        setcookie("passUser");
        header("location:index.php");
        exit;
    }
    $conn->close();
}
?>