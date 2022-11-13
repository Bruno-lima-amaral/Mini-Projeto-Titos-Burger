<?php

$baseURL = 'http://'.$_SEVER['SEVER_NAME'];
$baseURL .= '/titosburgerdm';

    require 'connect.php';

$emailUser = $_POST['email-user'];
$loginUser = $_POST['login-user'];

$consultSql = "SELECT * FROM tb_usuario WHERE nome_usuario = '$loginUser' AND email_usuario = '$emailUser'";
 if(($result = $conn->query($consultSql)) === TRUE){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_row($result)){
            $hash = $row[4];
        }
        $urlRecovery = $baseURL . "/recuperacao-senha.php?idRec=" .$hash;
        //Montar o email para ser enviado este padrão segue o requisito da localweb

        $assunto = "=?UTF-8?B?".base64_encode(
            'Recuperar Senha - Titos Burger -'.date('d/m/Y').'-'.date('H:i')
        )."?=";

        $destinatario = $emailUser;

        $mensagem = "
            <table style ='width:100%;margin:0px;padding:0px'>
                <tr>
                    <td>
                        <h1>Recuperar senha - Titos Burger</h1>
                    </td>
                </tr>
                <tr>
                    <td>URL de Recuperação de senha:</td>      
                    <td><a href='$urlRecovery' target='_blank'>$urlRecovery</a></td> 
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>$emailUser</td>
                </tr>
            </table>
                
        ";
        //entra o codigo da localweb para o disparo do email.
        echo "Deu Bom! <br>";
    
    }else{
        echo "Deu Ruim!<br>";
    }
    $conn->close();

}else{
    echo "não conectou<br>";
};
echo $mensagem;
