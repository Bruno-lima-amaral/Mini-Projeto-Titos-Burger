<?php
// incluindo os a conexão
require "connect.php";

// Criar variavel de consulta no BD
$querySQL = "SELECT * FROM tb_acl WHERE id_status = '2'"; //desse modo estamos selecionando TUDO da tabela, o que pode ser prejudicial pois pode prejudicar a segunrança do sistema.

// Podemos colocar ainda ORDER BY description ASC OU DESC

if ($resultSQL = mysqli_query($conn, $querySQL)){
?>


    <html>

    <body>
        <table>
            <tr>
                <td>Tipo de ACL</td>
                <td>Descrição ACL</td>
            </tr>
        <?php

        while ($rowACL = $resultSQL->fetch_array()){
            $rowACL[] = $rowACL;

            $id_acl = $rowACL['id_acl'];
            $acl_type = $rowACL['tipo_acl'];
            $description = $rowACL['descricao'];

            $exibirQuery = "<tr><td>" . $acl_type . "</td>";
            $exibirQuery .= "<td>" . $description . "</td></tr>";

            echo $exibirQuery;
        }

    } else {
        $resp = "Não carregou os dados.";
        echo $resp;
    }
    $conn->close();
        ?>
        </table>

        <div class="centered">
            <div class="blob-1"></div>
            <div class="blob-2"></div>
        </div>
        <br>
    </body>

    <!-- Estilizando Porque só o esqueleto é triste -->
    <style>
        table,
        tr,
        td {
            border: 1px solid #555;
            padding: 10px;
        }

        table {
            display: flex;
            width: 90vw;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            background-color: #222;
            color: #FFF;
        }

        td {
            width: 50vw;
        }

        tr:nth-child(1) {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            text-transform: uppercase;
        }

        .centered {
            width: 400px;
            height: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FFF;
            filter: blur(10px) contrast(20);
        }

        .blob-1,
        .blob-2 {
            width: 70px;
            height: 70px;
            position: absolute;
            background: #222;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .blob-1 {
            left: 20%;
            animation: osc-l 2.5s ease infinite;
        }

        .blob-2 {
            left: 80%;
            animation: osc-r 2.5s ease infinite;
            background: #0ff;
        }

        @keyframes osc-l {
            0% {
                left: 20%;
            }

            50% {
                left: 50%;
            }

            100% {
                left: 20%;
            }
        }

        @keyframes osc-r {
            0% {
                left: 80%;
            }

            50% {
                left: 50%;
            }

            100% {
                left: 80%;
            }
        }
    </style>

    </html>