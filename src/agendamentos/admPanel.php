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
        
        <form name="consulta" action="admPanel.php" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" maxlength="80" name="nome_usuario" require>
                        <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i> Consultar</button>
                        <a class="btn btn-dark" href="admPanel.php"><i class="fas fa-sync-alt"></i></a>
                    </div>
                </div>
            </div>
        </form>
        <form name="filtro" action="admPanel.php" method="post">
            <div class="row">
                <div class="form-group col-md-2">
                    <div class="input-group mb-3">
                        <select name="filtragem" id="filtragem" class="form-control">
                            <option value="id_agendamentos DESC">Recentes ⌚</option>
                            <option value="data_agenda ASC">Data Ascendente ↑</option>
                            <option value="data_agenda DESC">Data Decrescente ↓</option>
                        </select>
                        <button type="submit" class="btn btn-secondary"> Filtrar</button>
                    </div>
                </div>
            </div>
        </form>

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
                <th>Alterar status</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($agendamentos) : ?>
        <?php foreach ($agendamentos as $agendamento) : ?>
            <tr>
                <td><?php echo $agendamento['id_agendamentos']; ?></td>
                <td><?php echo $agendamento['nome']; ?></td>
                <td><?php echo $agendamento['procedimento']?></td>
                <td><?php echo formataData($agendamento['data_agenda'], "d/m/Y H:i"); ?></td>
                <td><?php echo $agendamento['status_agenda']; ?></td>
                
                <td class="actions text-start">
                        <a href="confirma.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-square-plus"></i> Confirmar</a>
                        <a href="recusa.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-square-minus"></i> Recusar</a>
                        <a href="concluido.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-sm btn-dark"><i class="fa-solid fa-check"></i> Concluído</a>
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
