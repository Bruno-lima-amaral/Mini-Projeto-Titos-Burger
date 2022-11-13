<?php 
    include_once('configs/global.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= title ." | ".$nomePagina ?> </title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="assets/css/adminStyle.css">



    <style>
        .bunda{
            display: none;
        }
    </style>
</head>

    <?php #Header
    if ($nomePagina != 'Painel Administrativo') {
        include_once('includes/header.inc.php');
    }
    ?>
    
    