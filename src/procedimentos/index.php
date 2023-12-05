<?php
    include("../../config.php");
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);   
?>
    <main>

        
        <div class="trat-gen">
            
            <div class="trat-title-container">
                <div class="trat-title-container">
                        <h2>
                            Procedimentos e tratamentos
                        </h2>
                        <div class="linha-title">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/textless-logo.png">
                        </div>
                </div>
            </div>
            
            
    
            <div class="general-container">
                <div class="trats-proced-container">
                    <div class="trat-proced-container">
                        <a href="<?php echo baseurl; ?>/src/procedimentos/botox.php">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Toxina botulínica - botox</h2>
                            <p> O Botox é uma técnica que utiliza a toxina botulínica para suavizar rugas e linhas de expressão, proporcionando uma aparência mais jovem e relaxada.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="<?php echo baseurl; ?>/src/procedimentos/rinomodelacao.php">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Rinomodelação</h2>
                            <p>É um procedimento não cirúrgico que utiliza preenchimentos dérmicos para melhorar a aparência do nariz, corrigindo irregularidades no formato ou tamanho.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="<?php echo baseurl; ?>/src/procedimentos/preenchLabial.php">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Preenchimento labial</h2>
                            <p>É um procedimento que utiliza substâncias para aumentar o volume e melhorar o contorno dos lábios, proporcionando uma aparência mais cheia e definida.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Bioestimuladores de colágeno</h2>
                            <p>São substâncias injetáveis que estimulam a produção de colágeno na pele. São utilizados para tratar rugas, flacidez e melhorar a textura da pele.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Fios de PDO</h2>
                            <p>São fios absorvíveis que são inseridos na pele para promover um efeito de lifting facial, melhorando a firmeza e a sustentação da pele.</p>
                        </a>
                    </div>
                </div>
    
                <div class="trats-proced-container">
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Microagulhamento</h2>
                            <p>O microagulhamento é uma técnica estética que utiliza agulhas para criar microperfurações na pele, estimulando a produção de colágeno e elastina.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Peeling químico</h2>
                            <p>O peeling químico é um procedimento estético que usa substâncias químicas para renovar a pele, promovendo uma aparência mais suave e rejuvenescida.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Skinbooster</h2>
                            <p>O Skinbooster é um procedimento estético que envolve a injeção de ácido hialurônico na pele para melhorar a hidratação e a elasticidade.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Intradermoterapia</h2>
                            <p>A Intradermoterapia consiste na aplicação de pequenas quantidades de substâncias ativas na camada superficial da pele para tratar diversas condições, como celulite e flacidez.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Microtox</h2>
                            <p>A Microtox é uma técnica que utiliza pequenas quantidades de toxina botulínica, aplicadas de maneira difusa, para suavizar rugas e criar um efeito de rejuvenescimento.</p>
                        </a>
                    </div>
                </div>
    
                <div class="trats-proced-container">
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Cicatriz de acne</h2>
                            <p> Procedimento estético para suavizar ou remover as marcas deixadas por lesões de acne, utilizando técnicas como laser ou microagulhamento.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Melasma/manchas</h2>
                            <p>Tratamento direcionado à redução das manchas da pele causadas pelo melasma, geralmente envolvendo o uso de cremes despigmentantes e procedimentos a laser.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Hidratação facial</h2>
                            <p>Procedimento que visa reforçar a hidratação da pele do rosto, frequentemente realizado com máscaras, soros ou injeções de ácido hialurônico.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Lipo enzimática de papada</h2>
                            <p> Intervenção estética que utiliza enzimas para dissolver o excesso de gordura na região da papada, proporcionando um contorno mais definido ao pescoço.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Tratamentos para pescoço</h2>
                            <p>Diversas abordagens estéticas destinadas a melhorar a aparência do pescoço, incluindo procedimentos como lifting, radiofrequência ou preenchimento.</p>
                        </a>
                    </div>
                </div>
    
                <div class="trats-proced-container">
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Enzimas</h2>
                            <p>Procedimentos estéticos que empregam enzimas para diversos fins, como estimular a produção de colágeno, melhorar a textura da pele ou reduzir a gordura localizada.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Trat. gordura localizada</h2>
                            <p>Intervenções estéticas focadas na redução de depósitos de gordura em áreas específicas do corpo, muitas vezes utilizando técnicas como criolipólise, ultrassom ou lipossucção.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Hidrolipoclasia</h2>
                            <p>Procedimento estético que combina a infusão de solução salina com ultrassom, visando a quebra de células de gordura para facilitar sua eliminação.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Flacidez corporal</h2>
                            <p>Tratamento para combater a perda de elasticidade da pele e fortalecer os tecidos, podendo ter técnicas como radiofrequência, laser ou procedimentos cirúrgicos.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Limpeza de pele</h2>
                            <p>Procedimento estético que remove impurezas, células mortas e comedões da pele, promovendo uma pele mais saudável e revitalizada.</p>
                        </a>
                    </div>
                </div>
                 
                <div class="trats-proced-container">
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Drenagem linfática</h2>
                            <p>Procedimento estético que utiliza massagem suave para estimular o sistema linfático, reduzindo retenção de líquidos e promovendo a eliminação de toxinas.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Preenchimento facial</h2>
                            <p>Intervenção estética que envolve a injeção de substâncias, como ácido hialurônico, para suavizar rugas, linhas de expressão e restaurar volume facial.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Lipo enzimática de papada</h2>
                            <p>Técnica estética que utiliza enzimas para dissolver o excesso de gordura na região da papada, proporcionando um contorno mais definido ao pescoço.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Protocol. para emagrecimento</h2>
                            <p>Conjunto de procedimentos e orientações personalizadas, como dieta, exercícios e tratamentos estéticos, visando a perda de peso de forma saudável.</p>
                        </a>
                    </div>
    
                    <div class="trat-proced-container">
                        <a href="">
                            <img class="linha-img" src="<?php echo baseurl; ?>/src/imagens/testing.png">
                            <h2>Definição abdominal</h2>
                            <p>Abordagem estética que busca realçar a definição muscular na região abdominal, podendo incluir exercícios específicos, dieta e tratamentos como radiofrequência.</p>
                        </a>
                    </div>
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