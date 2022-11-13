<?php

    /*
    Configurando com Estrutura de dados via php estrturado
    realizado por docente Nerildo Viana
    na data do dia 14/06/2022
    Versão 1.0
    */
    
    //  Conecta localhost

    $server = "localhost";
    $username = "root";
    $password = "";
    $nameDB = "titos-burger";

    // $server = "11.102.0.17";
    // $username = "webdna_tito_user";
    // $password = "Tito@303020";
    // $nameDB = "webdna_tito";

    $conn = mysqli_connect($server, $username, $password, $nameDB)
    or die ("Não foi possível conectar: " . mysqli_error($conn));

    // Configurar classe de conjuto de caractereres
    mysqli_set_charset($conn, "utf8");

    ?>
