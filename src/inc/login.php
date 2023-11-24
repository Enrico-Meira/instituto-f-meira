<?php 
    ob_start();
    include("../../config.php");
    if(!isset($_SESSION))
        {
            // session_start();
            echo "eu sou uma cadela";
            $session_ativa = session_status() == PHP_SESSION_ACTIVE;
            echo $session_ativa;
            session_start();
            print_r(scandir(session_save_path()));
            $SESSION_ID = 'fnqmodku6m393po0l8f8lcsnjt';
            echo (file_exists(session_save_path().'/sess_'.$SESSION_ID) ? "Existe!" : "Não existe!");
            session_destroy();
            die();
        }
    include(header_template);
?>



<div id="actions" class="mt-5 mb-5">
    <form action="valida.php" method="post">
        <div class="row">
            <h3> Faça login</h3>
            <div class="form-floating col-12 mb-2">
                <input type="text" class="form-control" id="log" placeholder="Usuário" name="login" required oninvalid="this.setCustomValidity('Preencha o Usuário!')" onchange="try{setCustomValidity('')}catch(e){}">
                <label for="log">Usuário</label>
            </div>
            <div class="form-floating col-12 mb-2">
                <input type="password" class="form-control" id="pass" placeholder="Senha" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                <label for="log">Senha</label>
            </div>
            <div class="form-floating col-12 mb-2">
                <button type="submit" class="btn btn-secondary btn-block mb-4"><i class="fa-solid fa-user-check"></i> Conectar</button>
                <a href = "<?php echo baseurl; ?>" class="btn bnt-light btn-block mb-4"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php 
	include(footer_template); 
	ob_end_flush();
?>