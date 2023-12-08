<?php
    ob_start();
    include("../../config.php");
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);
    $_SESSION['id_proced'] = 2;   
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
                <h2>RINOMODELAÇÃO</h2>
                <p>A rinomodelação é um procedimento estético não cirúrgico que busca aprimorar a aparência do nariz sem recorrer à cirurgia. Utilizando preenchedores à base de ácido hialurônico, injetados na região nasal, o procedimento permite ajustes como a correção de pequenas assimetrias e a suavização de irregularidades. Por ser ambulatorial, a rinomodelação oferece uma recuperação mais rápida em comparação com a rinoplastia cirúrgica. Contudo, é crucial consultar um profissional qualificado antes do procedimento para avaliar a adequação às necessidades do paciente e garantir resultados seguros e satisfatórios. </p>
            </div>
            <?php if (isset($_SESSION['email'])) : ?>
                <a class="botox-btn" href="<?php echo baseurl; ?>/src/agendar/">AGENDAR</a>
            <?php else : ?>
                <a class="botox-btn" href="<?php echo baseurl; ?>/src/inc/login.php">AGENDAR</a>
            <?php endif; ?>
            <div class="hex2">
                <img class="hex-img-2"src="<?php echo baseurl; ?>/src/imagens/rinoplasta.jpg" alt="some">
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
    ob_end_flush();
?>