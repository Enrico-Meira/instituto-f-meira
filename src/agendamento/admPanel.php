<?php
        ob_start();
        $head = "cabecalho2";
        require_once('functions.php');
        if(!isset($_SESSION)) 
        { 
                session_start();
        }
        index();
        include(header_template);
        
?>

    <header class="barra">
        <div class="row">
            <div class="col-sm-6">
                <h2>Agendamentos</h2>
            </div>
        </div>
    </header>
    

    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php clear_messages(); ?>
    <?php endif; ?>

    <hr>

    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID agendamento</th>
            <th width="30%">Nome</th>
            <th>Procedimento</th>
            <th>Data agendada</th>
            <th>Status agendamento</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($agendamentos) : ?>
    <?php foreach ($agendamentos as $agendamento) : ?>
        <tr>
            <td><?php echo $agendamento['id_agendamentos']; ?></td>
            <td><?php echo $agendamento['nome']; ?></td>
            <td><?php echo $agendamento['procedimento']?></td>
            <td><?php echo formataData($agendamento['data_agenda'], "d/m/Y"); ?></td>
            <td><?php echo $agendamento['status_agenda']; ?></td>
            
            <td class="actions text-start">
                    <a href="edit.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
    </table>

    <?php 

    include(footer_template); 
    ob_end_flush();
    ?>
