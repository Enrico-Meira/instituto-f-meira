<?php
        ob_start();
        $head = "cabecalho2";
        $footer = "footer2";
        require_once('functions.php');
        if(!isset($_SESSION)) 
        { 
                session_start();
        }
        index();
        include(header_template);
        
?>

    <div class="corpo">
        <div class="barra">
            <div class="row2">
                <div class="col-sm-6">
                    <h2>Agendamentos</h2>
                </div>
            </div>
        </div>


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
                        <a href="confirma.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-square-plus"></i>Confirmar</a>
                        <a href="recusa.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-square-minus"></i>Recusar</a>
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
    </div>
        <?php 
    
    include(footer_template); 
    ob_end_flush();
    ?>
