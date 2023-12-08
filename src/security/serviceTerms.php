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

<div class="service">
    <h1>Termos de Serviço - Instituto Fernanda Meira</h1>
    <h2>
    1. Agendamento e Cancelamento:
        <p>Os agendamentos podem ser feitos online, por telefone ou pessoalmente.
        Cancelamentos devem ser feitos com antecedência mínima de 5 para evitar taxas.</p>
    </h2>

    <h2>
    2. Pagamentos e Faturamento:
        <p>Os pagamentos podem ser efetuados em dinheiro, cartão de débito ou crédito.
        Faturas vencem 15 dias após a prestação do serviço.</p>
    </h2>

    <h2>
    3. Política de Cancelamento:
        <p>A clínica reserva-se o direito de cancelar ou reagendar um serviço por razões técnicas ou operacionais.</p>
    </h2>

    <h2>
    4. Confidencialidade e Privacidade:
        <p>Todas as informações pessoais e de saúde são tratadas com estrita confidencialidade.
        Fotos e resultados de tratamentos só serão divulgados com autorização prévia do cliente.</p>
    </h2>

    <h2>
    5. Responsabilidade do Cliente:
        <p>O cliente é responsável por fornecer informações precisas sobre sua saúde e condições pré-existentes.
        O cliente deve seguir as orientações pós-tratamento para otimizar os resultados.</p>
    </h2>

    <h2>
    6. Reagendamento e Reembolso:
        <p>Os tratamentos podem ser reagendados com antecedência.
        Reembolsos são emitidos conforme nossa política de reembolso, disponível mediante solicitação.</p>
    </h2>

    <h2>
    7. Comprometimento com a Excelência:
        <p>Comprometemo-nos a fornecer serviços de alta qualidade utilizando equipamentos e produtos seguros e eficazes.
        Buscamos a satisfação do cliente e estamos abertos a feedback construtivo.</p>
    </h2>

    <h2>
    8. Política de Menores:
        <p>Serviços para menores de idade devem ser agendados e acompanhados por um responsável legal.
        Certos tratamentos podem ter restrições de idade.</p>
    </h2>

    <h2>
    9. Alterações nos Termos:
        <p>A clínica reserva-se o direito de alterar estes termos a qualquer momento, sendo aconselhável revisá-los periodicamente.</p>
    </h2>
</div>

<?php 
    require_once(footer_template);
?>