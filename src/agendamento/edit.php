<?php 
    ob_start();
    require_once('functions.php'); 
    if(!isset($_SESSION))
    {
        session_start();
    }
    edit();
    include(header_template);
    
    function criaData($data){
        $d = new DateTime ($data);
        return $d->format("Y-m-d");
    }
?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $agendamento['id_agendamento']; ?>" method="post">
 <!-- area de campo -->
  <hr>
        <div class="row">
            <div class="form-group col-md-7">
            <label for="name">Nome / Razão Social</label>
            <input type="text" class="form-control" name="agendamento['nome']" value="<?php echo $agendamento['nome']; ?>">
            </div>

            <div class="form-group col-md-3">
            <label for="campo2">CNPJ / CPF</label>
            <input type="text" class="form-control" name="agendamento['cpf']" value="<?php echo $agendamento['cpf']; ?>" maxlength="11">
            </div>

            <div class="form-group col-md-2">
            <label for="campo3">Data de Nascimento</label>
            <input type="date" class="form-control" name="agendamento['birthdate']" value="<?php echo criaData($agendamento['birthdate']); ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
            <label for="campo1">Endereço</label>
            <input type="text" class="form-control" name="agendamento['address']" value="<?php echo $agendamento['address']; ?>">
            </div>

            <div class="form-group col-md-3">
            <label for="campo2">Bairro</label>
            <input type="text" class="form-control" name="agendamento['hood']" value="<?php echo $agendamento['hood']; ?>">
            </div>

            <div class="form-group col-md-2">
            <label for="campo3">CEP</label>
            <input type="text" class="form-control" name="agendamento['zip_code']" value="<?php echo $agendamento['zip_code']; ?>" maxlength="8">
            </div>

            <div class="form-group col-md-2">
            <label for="campo3">Data de Cadastro</label>
            <input type="date" class="form-control" name="agendamento['created']" disabled value="<?php echo criaData($agendamento['created']); ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
            <label for="campo1">Cidade</label>
            <input type="text" class="form-control" name="agendamento['city']" value="<?php echo $agendamento['city']; ?>">
            </div>

            <div class="form-group col-md-2">
            <label for="campo2">Telefone</label>
            <input type="text" class="form-control" name="agendamento['phone']" value="<?php echo $agendamento['phone']; ?>" maxlength="10">
            </div>

            <div class="form-group col-md-2">
            <label for="campo3">Celular</label>
            <input type="text" class="form-control" name="agendamento['mobile']" value="<?php echo $agendamento['mobile']; ?>" maxlength="11">
            </div>

            <div class="form-group col-md-1">
            <label for="campo3">UF</label>
            <input type="text" class="form-control" name="agendamento['state']" value="<?php echo $agendamento['state']; ?>" maxlength="2">
            </div>

            <div class="form-group col-md-2">
            <label for="campo3">Inscrição Estadual</label>
            <input type="text" class="form-control" name="agendamento['ie']" value="<?php echo $agendamento['ie']; ?>" maxlength="11">
            </div>

        </div>
            <div id="actions" class="row">
                <div class="col-md-12">
                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-sd-card"></i> Salvar</button>
                <a href="index.php" class="btn btn-default"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
                </div>
            </div>
        </form>

<?php 
include(FOOTER_TEMPLATE); 
ob_end_flush();
?>