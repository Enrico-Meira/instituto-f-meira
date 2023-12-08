<?php 
    ob_start();
    include("../../config.php");
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
        session_start();
    }
    include(header_template);
?>


<div class="sim-body">
    <div class="wrapper2">
        <form action="valida.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" class="form-control" id="log" placeholder="Usuário" name="login" required oninvalid="this.setCustomValidity('Preencha o Usuário!')" onchange="try{setCustomValidity('')}catch(e){}">
                <i class="bx bxs-user"></i>
                <!-- <label for="log">Usuário</label> -->
            </div>

            <div class="input-box">
                <input type="password" class="form-control" id="pass" placeholder="Senha" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                <i class="bx bxs-lock-alt"></i>
                <!-- <label for="log">Senha</label> -->
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Manter login</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Não possui uma conta? <a href="<?php echo baseurl; ?>/src/formulario/index.php">Registrar</a></p>
            </div>
        </form>
    </div>
</div>

<?php 
	include(footer_template); 
	ob_end_flush();
?>