<?php
require 'connect.php';

$emailUser       = $_POST['email-user'];
$loginUser       = $_POST['login-user'];
$passUser        = $_POST['login-pass'];
$passUserConf    = $_POST['login-pass-conf'];
$hashWeb       = $_POST['idRec'];

if($passUser === $passUserConf){

    $consultSQL = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND email_usuario = '$emailUser' AND hash = '$hashWeb'";

    $resultSQL = $conn->query($consultSQL);

    if($resultSQL === TRUE){
        if(mysqli_num_rows($resultSQL) > 0){

            $newHash = md5($emailUser . $passUser."BrunoMACHOCABREIRO2K22");

            $update = "UPDATE tb_usuario SET senha_usuario = '$passUser' AND hash = '$newHash' WHERE nome_usuario = '$loginUser'";

            if($conn->query($update) === TRUE){
                $resp = "Senha alternada com Sucesso!";
            }else{
                $resp = "Erro ao se comunicar com o Banco de Dados";
            }
        }else{
            $resp = "ERRO! Usuario não existe";
        }
    }else{
        $resp = "Erro ao se conectar com o Banco de Dados";
    }

}else{
    $resp = "
        <form action=\"recovery-pass-update.php\" method=\"post\">
        <h2>Recuperar senha</h2>
        <h4>Senhas não são iguais corrijas-as</h4>

        <label>Email</label>
        <input type=\"mail\"name=\"email-user\"placeholder=\"Digite seu email\" value=\"$emailUser\">
        <label>Usuario</label>
        <input type=\"text\"name=\"login-user\"placeholder=\"Digite seu Usuario\" value=\"$loginUser\">
            <br>
        <label>Nova Senha</label>
        <input type=\"password\"name=\"login-pass\"placeholder=\"Digite nova senha\">
        <label>Confirme Senha</label>
        <input type=\"password\"name=\"login-pass-conf\"placeholder=\"Confirme Senha\">

        <input type=\"hidden\"name=\"idRec\"valeu=\"$hashWeb\">
            <br>
        <button>Recuperar Senha</button>
        </form>
    ";
}
?>
<?=$resp ?>