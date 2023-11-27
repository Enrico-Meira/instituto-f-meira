<?php
    require_once('functions.php');
    $head = "cabecalho2";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);   
?>


    <main>
    <a href="<?php echo baseurl; ?>/src/formulario/index.php">
        <button class="agendamento-button">Agendar</button>
    </a>
        <div class="faixa">
            <div class="faixa-container">
                <div class="row">
                    <div class="faixa-name">
                        <h2>PROTOCOLL</h2>
                    </div>
                    <div class="bootstrap">
                        <div class="breadcrumb">
                            <a rel="home" href="/index.html" title="Home">
                                <span>Home</span>
                            </a>
                            <i class="fas fa-angle-double-right"></i>
                            <div class="bread">
                                <strong>
                                    <span class="page" id="meuInput">agendamento com o nome</span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="proced-container">
            <div class="conteudo-proced">
                <div class="texto">
                    <img src="https://esteticavanessagimenez.com.br/template/imagens/tratamentos/protocoll.png" alt="">
                    <p>O objetivo do Protocoll consiste em reestruturar a pele, para que isso seja possível, é utilizado a toxina intramuscular, infusão de ativos com toxina intradérmica e uso de ácidos. Dessa forma, é possível estimular a produção de colágeno pela derme.</p>
                    <p>Este é um dos tratamentos que mais trazem benefícios à pele, pois combina diferentes procedimentos em uma mesma sessão, como peeling e o skin booster. O processo é feito por meio de microagulhas. Portanto, as agulhas são usadas para injetar substâncias na área facial. A operação não causará muita dor, então não precisa se preocupar! O número de sessões indicadas varia de acordo com a necessidade de cada paciente. Mesmo assim, após o primeiro tratamento, já dá para perceber as alterações iniciais na pele.</p>
                    <div class="proced-ben">
                        <div class="proced-ben-container">
                            <div class=""> <!-- PROVAVELMENTE UMA DIV DE ANIM -->
                                <h2>Benefícios do Protocoll</h2>
                                <div class="linha-title">
                                    <img src="https://esteticavanessagimenez.com.br/template/imagens/icone.png" alt="">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <p>Ao estimular a produção de colágeno, Protocoll alisa as rugas, melhora a textura e clareia o tom da pele. Além disso, pode efetivamente melhorar a espessura da pele, flacidez e cicatrizes de acne. O tratamento também pode melhorar as cicatrizes atróficas - aquelas cicatrizes que aparecem depois de perder a estrutura que sustenta a pele. Aqui, o colágeno entra em ação e ajuda a revitalizar essas estruturas.</p>
                    <p>Protocoll também facilita a renovação celular. Ao retirar as células mortas da epiderme, essa técnica estimula e acelera o surgimento de novas células. Isso faz com que a pele pareça mais jovem e saudável. Com o passar dos anos, o processo de renovação celular e a produção de colágeno natural diminuem. Portanto, você deve ter cuidado para garantir que sua pele continue a se renovar.</p>
                </div>
            </div>
        </div>
    </main>
<?php
    require_once(footer_template);
?>