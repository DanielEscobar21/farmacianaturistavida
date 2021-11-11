<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    if(!isset($title) || empty($title)){
        $title='';
    }
    echo "<title>$title Vida - Farmacia Naturista</title>";
    ?>
    <!--========== CSS ==========-->
    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo ROUTE_CSS?>styles.css">    
    <link rel="shortcut icon" href="<?php echo ROUTE_FAVICON?>favicon.ico"/>
</head>
<body>