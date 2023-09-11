<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- calendario -->
        <meta
        name="description"
        content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!"
        />
        <meta
        name="keywords"
        content="calendar, events, reminders, javascript, html, css, open source coding"
        />
        <link rel="stylesheet" href="../css/button.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />
        
        <title>Calendar with Events</title>
        <script>
        function exibirTexto() {
            var texto = sessionStorage.getItem('meuTexto');
            document.getElementById('textoArmazenado').textContent = texto;
            sessionStorage.removeItem('meuTexto');
        }

        function exibirForm() {
            var form = sessionStorage.getItem('meuTeste');
            document.getElementById('formArmazenado').textContent = texto;
            sessionStorage.removeItem('meuTeste');
        }
        </script>
        <!-- calendario -->
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/reset.css">
        <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/style.css">
        <!-- <link rel="stylesheet" href="/src/css/CalendarStyle.css" /> -->
        <title>TCC</title>
    </head>
    <body>
        <header class="cabecalho">
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
                        <a href="#">Fale conosco</a>
                    </li>
                </ul>
            </nav>
        </header>