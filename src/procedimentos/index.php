<?php
    require_once('functions.php');
    $head = "cabecalho2";
    include(header_template);   
?>
    <main>
        <div class="trat-title">
            <div class="trat-container">
                    <h2>
                        Principais Tratamentos
                    </h2>
                    <div class="linha-title">
                        <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/logo.png">
                    </div>
            </div>
        </div>
        
                                       
        













        <!-- <a href="./protocoll.php">
        <img class="protocoll-img"src="<?php echo baseurl; ?>/src/imagens/logo.png" alt="">
        <h2>Protocoll</h2>
        <p>Esse tratamento tem o objetivo de reestruturar a pele, através da aplicação de toxinas que estimulam a produção de colágeno.</p>
        </a> -->
    </main>
<?php
    require_once(footer_template);
?>