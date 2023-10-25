<?php
    require_once('functions.php');
    $head = "cabecalho2";
    include(header_template);   
?>
    <main>
        <div class="trat-title">
            <div class="trat-container">
                <div class="init-anim">
                    <h2>
                        principais tratamentos
                    </h2>
                    <div class="linha-title">
                        <img src="<?php echo baseurl; ?>/src/imagens/logo.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="foto init-anim">
            <div class="tratamento-container">
                <div class="autoplay">
                    <div class="slick-list">
                        <div class="slick-track">
                            <div class="slick-slide">
                                <div>
                                    <div><!-- estilo vai ser definido na hora de animar com css -->
                                        <a href="./protocoll.php">
                                            <img src="" alt="">
                                            <h2>Protocoll</h2>
                                            <p>Esse tratamento tem o objetivo de reestruturar a pele, através da aplicação de toxinas que estimulam a produção de colágeno.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php
    require_once(footer_template);
?>