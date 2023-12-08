<?php 

    require_once('config.php');
    require_once(dbpath);
    $head = "cabecalho";
    $footer = "footer";
    if(!isset($_SESSION))
    {
        session_start();
    }
    include(header_template);
    $db = open_database();
?>
        <!-- <link rel="stylesheet" href="src/css/style.css">  -->
        



            <div class="introduction bg">
                <div class="name-container">
                        <h2>
                            Fernanda 
                            Meira
                        </h2>
                        <p>BIOMÉDICA ESTETA</p>
                </div>
                <div class="saber">
                    <a href="<?php echo baseurl; ?>/src/procedimentos/index.php">Tratamentos</a>
                    <a href="">Agendamentos</a>
                </div>
            </div>

            <div class="slider-container">
                <div class="pt"> 
                    <div class="trat-title-container">
                            <h2>
                                Principais procedimentos
                            </h2>
                            <div class="linha-title">
                                <img src="<?php echo baseurl; ?>/src/imagens/textless-logo.png">
                            </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="list">
                        <div class="item item-container trat-container" style="width: 430px;">
                            <img src="<?php echo baseurl; ?>/src/imagens/testing.png" alt="">
                            <h2>Toxina botulínica - botox</h2>
                            <p>O Botox é uma técnica que utiliza a toxina botulínica para suavizar rugas e linhas de expressão, proporcionando uma aparência mais jovem e relaxada.</p>
                        </div>
                        <div class="item item-container trat-container" style="width: 430px;">
                            <img src="<?php echo baseurl; ?>/src/imagens/testing.png" alt="">
                            <h2>Rinomodelação</h2>
                            <p>É um procedimento não cirúrgico que utiliza preenchimentos dérmicos para melhorar a aparência do nariz, corrigindo irregularidades no formato ou tamanho.</p>
                        </div>
                        <div class="item item-container trat-container" style="width: 430px;">
                            <img src="<?php echo baseurl; ?>/src/imagens/testing.png" alt="">
                            <h2>Bioestimuladores de colágeno</h2>
                            <p>São substâncias injetáveis que estimulam a produção de colágeno na pele. São utilizados para tratar rugas, flacidez e melhorar a textura da pele.</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            


            <!-- <br>
            <br> -->

            <!-- <div class="iframe">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.7135749635636!2d-47.462281188996116!3d-23.506824078749005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b11344dc07d%3A0x1750c849b8933f8e!2sInstituto%20F.%20Meira%20Est%C3%A9tica%20Avan%C3%A7ada!5e0!3m2!1spt-BR!2sbr!4v1683595038516!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->


            <script src="<?php echo baseurl; ?>/src/js/slider.js"></script>
<?php 
    require_once(footer_template);
?>

