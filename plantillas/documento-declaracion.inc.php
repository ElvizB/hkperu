<!DOCTYPE html>
<html lang="es">

<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9QGDF6X3ZD"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'G-9QGDF6X3ZD');
        </script>
    <meta charset="utf-8">
    <meta name="description" content="Galatel Perú">
    <meta name="keywords" content="Galatel Perú">
    <meta name="author" content="Galatel Perú">
    <meta name="theme-color" content="hsla(198, 100%, 41%)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA_IMG?>ico.ico">
    <?php
    if(!isset($titulo) || empty($titulo)){
      $titulo ='HK PERÚ';
    }
    echo "<title>$titulo</title>";
    ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo RUTA_CSS?>index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>servicios/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>nosotros/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>consultoria/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>formacion/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>contacto/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>modal/index.css" rel="stylesheet">
    <style>
      df-messenger {
        --df-messenger-button-titlebar-color: #0093d3;
    }
    </style>
</head>
<body class="oculto">

    <div id="mdb-preloader" class="flex-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>