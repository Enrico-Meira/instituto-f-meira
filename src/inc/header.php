<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/reset.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/style.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/responsiveStyle.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/button.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/proc.css">


        <!-- <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/tst.css"> -->

        
        
        <title>TCC</title>
    </head>
    <body>
        <header class="<?php echo $head; ?>">
            <a href="<?php echo baseurl; ?>/index.php">
                <img class="logo" src="<?php echo baseurl; ?>/src/imagens/logo.png">
            </a>
            <nav>
                <ul class="menu">
                    <li class="menu-li">
                        <a href="<?php echo baseurl; ?>/index.php">Início</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo baseurl; ?>/src/procedimentos/index.php">Procedimentos</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo baseurl; ?>/src/agendamento/calendario.php">Agendamento</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo baseurl; ?>/src/pages/about.php">Sobre nós</a>
                    </li>
                </ul>
                            <div class="navigation">
                                <div class="menuToggle"></div>
                                <ul>
                                    <li>
                                        <a href="<?php echo baseurl; ?>/index.php">
                                            <span class="icon"><i class="fa-solid fa-house"></i></span>
                                            <span class="title">Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon"><i class="fa-solid fa-user"></i></span>
                                            <span class="title">Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon"><i class="fa-solid fa-message"></i></span>
                                            <span class="title">Messages</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon"><i class="fa-solid fa-gear"></i></span>
                                            <span class="title">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                                            <span class="title">Password</span>
                                        </a>
                                    </li>
                                    
                                    <?php if (!isset($_SESSION['email'])) : ?>
                                        <li>
                                            <a href="<?php echo baseurl; ?>/src/inc/login.php">
                                                <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                                                <span class="title">Login</span>
                                            </a>
                                        </li>
                                    <?php else : ?>
                                        <li>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal">
                                                <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                                                <span class="title">Logout</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
            </nav>
        </header>

        