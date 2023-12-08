<?php
    include("../../config.php");
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);   
    $_SESSION['id_proced'] = 1;
?>


    <div class="btx-container1">
        <div class="logo-container">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <!-- <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Jumbotron Example</h1>
            <p>Lorem ipsum...</p>
        </div> -->

        <div class="botox-container">
            <div class="botox-title">
                <h2>TOXINA BOTULÍNICA</h2>
                <p>O Botox é um tratamento estético que utiliza a toxina botulínica para suavizar rugas e linhas de expressão no rosto. A toxina bloqueia temporariamente os sinais nervosos para os músculos, relaxando-os e reduzindo as rugas. O procedimento é realizado por profissionais qualificados, e os resultados duram de três a seis meses. </p>
            </div>
            <?php if (isset($_SESSION['email'])) : ?>
                <a class="botox-btn" href="<?php echo baseurl; ?>/src/agendar/">AGENDAR</a>
            <?php else : ?>
                <a class="botox-btn" href="<?php echo baseurl; ?>/src/inc/login.php">AGENDAR</a>
            <?php endif; ?>
            <div class="hex">
                <img class="hex-img"src="<?php echo baseurl; ?>/src/imagens/butux.jpg" alt="some">
            </div>
        </div>
    </div>

    <div class="btx-container2">
        <h2>Antes e Depois</h2>
        <p>Confira alguns dos resultados deste procedimento</p>
        <!-- <div class="linha-title">
            <img src="<?php echo baseurl; ?>/src/imagens/textless-logo.png">
        </div> -->
        <div class="resultados">
            <img src="<?php echo baseurl; ?>/src/imagens/meio.jpg" alt="">
            <img src="<?php echo baseurl; ?>/src/imagens/meio.jpg" alt="">
            <img src="<?php echo baseurl; ?>/src/imagens/meio.jpg" alt="">
            <img src="<?php echo baseurl; ?>/src/imagens/meio.jpg" alt="">
        </div>
    </div>


<?php
    require_once(footer_template);
?>