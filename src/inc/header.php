<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/reset.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/style.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/button.css">
        <title>TCC</title>
    </head>
    <body>
        <header class="<?php echo $head; ?>">
            <a href="<?php echo baseurl; ?>/index.php">
                <img class="logo" src="<?php echo baseurl; ?>/src/imagens/logo.png">
            </a>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="<?php echo baseurl; ?>/index.php">Início</a>
                    </li>
                    <li>
                        <a href="<?php echo baseurl; ?>/src/procedimentos/index.php">Procedimentos</a>
                    </li>
                    <li>
                        <a href="<?php echo baseurl; ?>/src/agendamento/calendario.php">Agendamento</a>
                    </li>
                    <li>
                        <a href="<?php echo baseurl; ?>/src/pages/about.php">Sobre nós</a>
                    </li>
                     <li>
                         <a href="<?php echo baseurl; ?>/src/inc/login.php">
                            <i class="fa-solid fa-user icon"></i> Login
                        </a>
                    </li> 
                </ul>
            </nav>
        </header>