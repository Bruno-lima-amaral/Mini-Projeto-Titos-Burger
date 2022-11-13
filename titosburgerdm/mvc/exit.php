<?php
require 'connect.php';
include_once('validation.php');
 session_destroy();

$conn->close();
?>

<h1>CONEXÃO ENCERRADA</h1>