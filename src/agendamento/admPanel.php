<?php 
        ob_start();
	    require_once('functions.php'); 
        if(!isset($_SESSION))
        {
            session_start();
        }
	    index();
?>

<?php include(header_template); ?>

    <h2>Cliente <?php echo $agendamento['id_agendamentos']; ?></h2>
    <hr>

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
    <?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Nome / Razão Social:</dt>
        <dd><?php echo $agendamento['nome']; ?></dd>

        <dt>Procedimento selecionado:</dt>
        <dd><?php echo $agendamento['procedimento']; ?></dd>

        <dt>Data agendada:</dt>
        <dd><?php echo $agendamento['data_agenda']; ?></dd>

        <dt>Status atual:</dt>
        <dd><?php echo $agendamento['status_agenda']; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
        <?php if (isset($_SESSION['email'])) : ?>
            <a href="edit.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
        <?php endif; ?>     
            <a href="index.php" class="btn btn-default"><i class="fa-solid fa-rotate-left"></i> Voltar</a>
        </div>
    </div>

<?php 
require_once(footer_template); 
ob_end_flush();
?>