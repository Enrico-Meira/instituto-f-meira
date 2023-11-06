<?php 
    require_once('config.php');
    require_once(dbpath);
    $head = "cabecalho";
    include(header_template);
    $db = open_database();
?>
        <!-- <link rel="stylesheet" href="src/css/style.css">  -->
        <!-- <img src="/src/imagens/background.jpg" alt="" class="bg-image"> -->
        <main class="main-container">
            <div class="introduction bg">
                <div class="name-container">
                        <h2>
                            Fernanda 
                            <span>Meira</span>
                        </h2>
                </div>
                <div class="saber">
                    <a href="">Tratamentos</a>
                    <a href="">Contato</a>
                </div>
            </div>

            <div class="pt"> 
                <div class="pt-container">
                        <h2>
                            principais tratamentos
                        </h2>
                        <div class="linha-title">
                            ::before
                            <img src="imagem">
                            ::after
                        </div>
                </div>
            </div>

    
            <div class="imgs-container">
                <div class="autoplay">
                    <button class="button-prev">botão prev</button>
                    <div>
                        <!-- AQUI VIRÁ O MENU DE SLIDE AUTOMÁTICO -->
                    </div>
                    <button class="button-next">botão next</button>
                </div>
            </div>

            <br>
            <br>

            <div class="iframe">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.7135749635636!2d-47.462281188996116!3d-23.506824078749005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b11344dc07d%3A0x1750c849b8933f8e!2sInstituto%20F.%20Meira%20Est%C3%A9tica%20Avan%C3%A7ada!5e0!3m2!1spt-BR!2sbr!4v1683595038516!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>

<?php 
    require_once(footer_template);
?>

