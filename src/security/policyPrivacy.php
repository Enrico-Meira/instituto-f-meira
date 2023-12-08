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

<div class="serviceLGDPD service">
    <h1>Política de Privacidade - Instituto Fernanda Meira</h1>
    <h2>
    1. Informações Coletadas::
        <p>Podemos coletar informações pessoais, como nome, endereço, número de telefone, endereço de e-mail e informações relacionadas à saúde.</p>
    </h2>

    <h2>
    2. Uso das Informações:
        <p>Utilizamos suas informações pessoais para agendar e fornecer serviços, processar pagamentos, enviar comunicações relacionadas a agendamentos e oferecer promoções ou descontos.</p>
    </h2>

    <h2>
    3. Confidencialidade e Segurança:
        <p>Mantemos medidas de segurança para proteger suas informações pessoais contra acesso não autorizado ou divulgação.
        Todas as informações fornecidas são tratadas com estrita confidencialidade.</p>
    </h2>

    <h2>
    4. Divulgação a Terceiros:
        <p>Não compartilhamos suas informações pessoais com terceiros, a menos que seja necessário para fornecer serviços ou cumprir requisitos legais.</p>
    </h2>

    <h2>
    5. Cookies e Tecnologias Semelhantes:
        <p>Podemos usar cookies e outras tecnologias para melhorar a experiência do usuário, analisar o tráfego e personalizar o conteúdo.</p>
    </h2>

    <h2>
    6. Acesso e Controle de Suas Informações:
        <p>Você tem o direito de acessar, corrigir ou excluir suas informações pessoais. Entre em contato conosco para exercer esses direitos.</p>
    </h2>

    <h2>
    7. Política para Menores de Idade:
        <p>Nossos serviços não são direcionados a menores de idade. Não coletamos intencionalmente informações de menores.</p>
    </h2>

    <h2>
    8. Alterações nesta Política:
        <p>Reservamo-nos o direito de alterar esta política de privacidade a qualquer momento. 
        As alterações serão comunicadas através do nosso site ou por outros meios de contato.</p>
    </h2>

    <h1>
        Conformidade com a Lei Geral de Proteção de Dados (LGPD)
        <p>O Instituto Fernanda Meira está comprometido em proteger a privacidade e os dados pessoais de seus clientes, seguindo rigorosamente os padrões estabelecidos pela Lei Geral de Proteção de Dados (LGPD).</p>
        <h2>
            Compromissos:
            <h3>
                1. Transparência:
                <p>Informamos claramente sobre como coletamos, usamos e protegemos suas informações pessoais.</p>
            </h3>
            <h3>
                2. Consentimento:
                <p>Obtemos seu consentimento explícito antes de coletar qualquer informação pessoal.</p>
            </h3>
            <h3>
                3. Acesso e controle:
                <p>Você tem o direito de acessar, corrigir ou excluir suas informações pessoais. Nossa política de privacidade fornece informações sobre como exercer esses direitos.</p>
            </h3>
            <h3>
                4. Segurança:
                <p>Implementamos medidas de segurança robustas para proteger suas informações contra acesso não autorizado.</p>
            </h3>
            <h3>
                5. Responsabilidade:
                <p>Assumimos a responsabilidade pela segurança e privacidade de suas informações pessoais.</p>    
            </h3>
        </h2>
        <h2>
            Como cumprimos a LGPD:
            <h3>
                1. Coleta Limitada:
                <p>Coletamos apenas as informações necessárias para fornecer nossos serviços.</p>
            </h3>
            <h3>
                2. Propósito Específico:
                <p>Utilizamos suas informações apenas para os fins específicos para os quais foram coletadas.</p>
            </h3>
            <h3>
                3. Consentimento Explícito:
                <p>Solicitamos seu consentimento explícito antes de coletar ou processar suas informações pessoais.</p>
            </h3>
            <h3>
                4. Segurança de Dados:
                <p> Implementamos medidas técnicas e organizacionais para garantir a segurança e a integridade dos dados.</p>
            </h3>
            <h3>
                5. Transparência:
                <p>Nossa política de privacidade fornece informações claras sobre como suas informações são tratadas.</p>
            </h3>
            <h3>
                6. Direitos do Titular
                <p>Respeitamos seus direitos, incluindo o direito de acesso, correção e exclusão de suas informações pessoais.</p>
            </h3>

            <p>Estamos comprometidos em manter práticas de privacidade transparentes e em conformidade com a LGPD. Se você tiver dúvidas sobre como suas informações são tratadas ou deseja exercer seus direitos de privacidade, entre em contato conosco.

            Agradecemos por confiar no Instituto Fernanda Meira.</p>
        </h2>
    </h1>
</div>

<?php 
    require_once(footer_template);
?>