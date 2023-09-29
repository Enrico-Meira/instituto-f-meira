<?php
    require_once('functions.php');
    $head = "cabecalho2";
    include(header_template);   
?>
    <main>
        <div class="faixa">
            <div class="faixa-container">
                <div class="row">
                    <div class="faixa-name">
                        <h2>TRATAMENTOS</h2>
                    </div>
                    <div class="bootstrap">
                        <div class="breadcrumb">
                            <i class="fas fa-angle-double-right"></i>
                            <div class="bread">
                                <strong>
                                    <span class="page">Tratamentos</span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linha">
            <div class="linha-container">
                <div class="init-anim">
                    <h2>
                        
                        principais tratamentos
                    </h2>
                    <div class="linha-title">
                        ::before
                        <img src="">
                        ::after
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