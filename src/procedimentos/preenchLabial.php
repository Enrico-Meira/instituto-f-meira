<?php
    require_once('functions.php');
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);   
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
            <div class="botox-title3">
                <h2>PREENCHIMENTO LABIAL</h2>
                <p>O preenchimento labial é um procedimento estético não invasivo projetado para realçar ou restaurar o volume e a forma dos lábios. Geralmente, é realizado por meio da injeção de substâncias preenchedoras, como ácido hialurônico, para proporcionar resultados naturais e simétricos. Essa abordagem é popular para quem busca lábios mais cheios, definidos ou corrigir linhas finas ao redor da boca. O preenchimento labial é uma opção conveniente, muitas vezes realizada em consultórios médicos, e possui um tempo de recuperação mínimo. No entanto, é crucial consultar um profissional capacitado para avaliar as expectativas do paciente, a fim de garantir resultados estéticos harmônicos e seguros. </p>
            </div>
            <a class="botox-btn3" href="<?php echo baseurl; ?>">AGENDAR</a>
            <div class="hex3">
                <img class="hex-img-3"src="<?php echo baseurl; ?>/src/imagens/preenchimento_labial.jpg" alt="some">
            </div>
        </div>
    </div>

    <div class="btx-container2">
        <h2>Antes e Depois</h2>
        <p>Confira alguns dos resultados deste procedimento</p>
        <div class="linha-title">
            <img src="<?php echo baseurl; ?>/src/imagens/textless-logo.png">
        </div>
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