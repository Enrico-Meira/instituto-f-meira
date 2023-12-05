<?php 
    require_once('../../config.php');
	require_once(dbpath);
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);
?>

    <main>
            <div class="location">
                <h3>NOSSA LOCALIZAÇÃO</h3>
                <img src="<?php echo baseurl; ?>/src/imagens/locate.png" alt="">
                <p class="lct-main-p">A sofisticação do espaço reflete o compromisso com o cuidado pessoal e a busca pela harmonia interior, proporcionando aos clientes uma experiência estética que transcende o físico, abraçando também o aspecto emocional e mental.</p>
                <div class="lct-div">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                        <path d="M22.0002 43.6666C19.0029 43.6666 16.1863 43.0978 13.5502 41.9603C10.9141 40.8228 8.621 39.2791 6.671 37.3291C4.721 35.3791 3.17725 33.086 2.03975 30.4499C0.902246 27.8138 0.333496 24.9971 0.333496 21.9999C0.333496 19.0027 0.902246 16.186 2.03975 13.5499C3.17725 10.9138 4.721 8.62075 6.671 6.67075C8.621 4.72075 10.9141 3.177 13.5502 2.0395C16.1863 0.902002 19.0029 0.333252 22.0002 0.333252C24.9974 0.333252 27.8141 0.902002 30.4502 2.0395C33.0863 3.177 35.3793 4.72075 37.3293 6.67075C39.2793 8.62075 40.8231 10.9138 41.9606 13.5499C43.0981 16.186 43.6668 19.0027 43.6668 21.9999C43.6668 24.9971 43.0981 27.8138 41.9606 30.4499C40.8231 33.086 39.2793 35.3791 37.3293 37.3291C35.3793 39.2791 33.0863 40.8228 30.4502 41.9603C27.8141 43.0978 24.9974 43.6666 22.0002 43.6666ZM22.0002 33.9166C23.6252 32.2916 25.0696 30.6124 26.3335 28.8791C27.4168 27.3985 28.4099 25.7735 29.3127 24.0041C30.2154 22.2346 30.6668 20.4833 30.6668 18.7499C30.6668 16.3666 29.8182 14.3263 28.121 12.6291C26.4238 10.9319 24.3835 10.0833 22.0002 10.0833C19.6168 10.0833 17.5766 10.9319 15.8793 12.6291C14.1821 14.3263 13.3335 16.3666 13.3335 18.7499C13.3335 20.4833 13.7849 22.2346 14.6877 24.0041C15.5904 25.7735 16.5835 27.3985 17.6668 28.8791C18.9307 30.6124 20.3752 32.2916 22.0002 33.9166ZM22.0002 21.9999C21.0974 21.9999 20.33 21.6839 19.6981 21.052C19.0661 20.4201 18.7502 19.6527 18.7502 18.7499C18.7502 17.8471 19.0661 17.0798 19.6981 16.4478C20.33 15.8159 21.0974 15.4999 22.0002 15.4999C22.9029 15.4999 23.6703 15.8159 24.3022 16.4478C24.9342 17.0798 25.2502 17.8471 25.2502 18.7499C25.2502 19.6527 24.9342 20.4201 24.3022 21.052C23.6703 21.6839 22.9029 21.9999 22.0002 21.9999Z" fill="#1C1B1F"/>
                    </svg>
                    <p>Condomínio Edifício Henrique Cattani - R. Pandiá Calógeras, 418, Sala, 93 - Jardim Vergueiro, Sorocaba - SP, 18030-030</p>
                </div>
                <div class="lct-iframe">  
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.7135749635636!2d-47.462281188996116!3d-23.506824078749005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b11344dc07d%3A0x1750c849b8933f8e!2sInstituto%20F.%20Meira%20Est%C3%A9tica%20Avan%C3%A7ada!5e0!3m2!1spt-BR!2sbr!4v1683595038516!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="evidence">
                <h3>DEPOIMENTOS</h3>
                <div class="evd-card">
                    <div class="evd-linha"></div>
                    <img class="virgula" src="<?php echo baseurl; ?>/src/imagens/virgula.png" alt="">
                    <img class="evd-img" src="<?php echo baseurl; ?>/src/imagens/Sample_User_Icon.png" alt="">
                    <p>A Dra. Fernanda é uma profissional muito cautelosa.
                    Amo a forma como ela trabalha, se importa realmente em tratar da sua pele, explica tudo muito detalhadamente.
                    Eu super recomendo. Uma pessoa honesta, está sempre se atualizando.</p>
                </div>

                <div class="evd-card">
                    <div class="evd-linha"></div>
                    <img class="virgula" src="<?php echo baseurl; ?>/src/imagens/virgula.png" alt="">
                    <img class="evd-img" src="<?php echo baseurl; ?>/src/imagens/Sample_User_Icon.png" alt="">
                    <p>Ambiente limpo, arejado, agradável e  acolhedor.
                    Profissional gabaritada, executa os procedimentos com destreza e delicadeza, tornando a experiência leve e tranquila.</p>
                </div>

                <div class="evd-card">
                    <div class="evd-linha"></div> 
                    <img class="virgula" src="<?php echo baseurl; ?>/src/imagens/virgula.png" alt="">
                    <img class="evd-img" src="<?php echo baseurl; ?>/src/imagens/Sample_User_Icon.png" alt="">
                    <p>Nossa a Dra. foi incrível no tratamento da minha irmã, super recomendo e indico, com toda certeza absoluta serei o próximo.</p>
                </div>
            </div>

            <div class="info">
                <div class="info-container">
                    <div class="row">
                        <div class="init-anim">
                            <img class="infoIMG" src="<?php echo baseurl; ?>/src/imagens/infoIMG.jpg">
                            <h3>SOBRE NÓS</h3>

                            <p>
                                Buuu 👻 Oi migos, tudo bom com vocês?? 
                                Deixa eu te contar um capítulo de uma historinha. 
                                Quando terminei minha Especialização em Biomedicina Estética, 
                                foquei em aprimorar as técnicas de procedimentos injetáveis que tinha aprendido. 
                                Realizei diversos cursos na área, com profissionais excelentes, 
                                em São Paulo, Belo Horizonte, Rio Grande do Sul.
                            </p>

                            <p>
                                Em 2022, tive a oportunidade de realizar um curso em cadáver fresco nos Estados Unidos, 
                                e eu garanto, isso elevou muito minha curva de aprendizagem. 
                                Hoje atendo meus pacientes no Instituto F. Meira 
                                (aquela "salinha 93", como eu gosto carinhosamente de chamar 😜). 
                                Eu te contei que eu amo aprender né? E claro que eu também amo ensinar.... 
                                Pode perguntar pros meus 250 alunos ou mais da UNICORP.
                            </p>

                            <p>
                                Bom migos esse é só um pedacinho das coisas legais que eu queria compartilhar com vocês hoje,
                                mas não sai daqui que eu tô sempre aprontando algo...!! 
                                E se você me perguntar se o caminho foi fácil, eu te digo que foi a vida, 
                                ela é fácil todo dia ?? Beijos e fui ;)
                            </p>
                        </div>
                    </div>
                </div>
            </div>


    </main>


    <?php 
        require_once(footer_template);
    ?>