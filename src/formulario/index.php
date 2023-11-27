<?php
    require_once('functions.php');
    $head = "cabecalho2";
    if(!isset($_SESSION))
    {
      session_start();
    }
    include(header_template);
    add();
?>

        <main>
        <div class="sim-body">
            <div class="wrapper2">
                <form action="valida.php" method="post">
                    <h1>Cadastro</h1>
                    <div class="input-box">
                        <input type="text" class="form-control" id="log" placeholder="Nome completo" name="login" required oninvalid="this.setCustomValidity('Preencha o Usuário!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-user"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="CPF" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Estado" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Cidade" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Bairro" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Rua" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Número" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Telefone" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="input-box">
                        <input type="date" class="form-control" id="pass" placeholder="Senha" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <input type="email" class="form-control" id="pass" placeholder="Email" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Senha" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="input-box">
                        <input type="password" class="form-control" id="pass" placeholder="Confirme a senha" name="senha" maxlength="30" required oninvalid="this.setCustomValidity('Preencha a Senha!')" onchange="try{setCustomValidity('')}catch(e){}">
                    </div>

                    <div class="gender-box">
                        <label class="gnr-title">Gênero:</label> <br>

                        <span class="gnr-label">
                            <label class="form-control" for="feminino">Fem</label>
                            <input class="gnr-input" type="radio" name="clientes['genero']" id="feminino" value="feminino">
                        </span>

                        <span class="gnr-label">
                            <label class="form-control" for="masculino">Mas</label>
                            <input class="gnr-input" type="radio" name="clientes['genero']" id="masculino" value="masculino">
                        </span>
                        
                        <span class="gnr-label">
                            <label class="form-control" for="outros">Out</label>
                            <input class="gnr-input" type="radio" name="clientes['genero']" id="outros" value="outros">
                        </span>
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



            <!-- <h3>Formulário</h3>
            <form class="formProced" method="post" action="index.php" enctype="multipart/form-data">     
                <input type="text" name="clientes['nome']" id="nome-completo" placeholder="Nome completo" maxlength="100" required> <br> <br>

                <input type="text" name="clientes['cpf']" id="cpf" placeholder="CPF"  maxlength="11" required> <br> <br>

                <input type="text" name="clientes['estado']" id="estado" placeholder="Estado" maxlength="2" required> <br> <br>

                <input type="text" name="clientes['cidade']" id="cidade" placeholder="Cidade" maxlength="100" required> <br> <br>

                <input type="text" name="clientes['bairro']" id="bairro" placeholder="Bairro" maxlength="100" required> <br> <br>

                <input type="text" name="clientes['rua']" id="rua" placeholder="Rua" maxlength="100" required> <br> <br>

                <input type="text" name="clientes['numero']" id="numero" placeholder="Número" maxlength="10" required> <br> <br>

                <input type="text" name="clientes['telefone']" id="telefone" placeholder="Telefone" maxlength="11" > <br> <br>

                <textarea name="clientes['descricao']" id="desc" cols="30" rows="10" placeholder="Descrição" maxlength="250"></textarea> <br> <br>

                <label class="dateLabel">Data de nascimento:</label> <br>
                <input type="date" name="clientes['data_nasc']" required> <br> <br>


                <label>Gênero:</label> <br>

                <label class="form-control" for="feminino">Feminino</label>
                <input type="radio" name="clientes['genero']" id="feminino" value="feminino">

                <label class="form-control" for="masculino">Masculino</label>
                <input type="radio" name="clientes['genero']" id="masculino" value="masculino">

                <label class="form-control" for="outros">Personalizado</label>
                <input type="radio" name="clientes['genero']" id="outros" value="outros">

                <br>
                <br>

                <input type="email" name="clientes['email']" id="email" placeholder="Email" maxlength="100" required> <br> <br>
                <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="30" required onchange="confereSenha();"> <br> <br>
                <input type="password" name="clientes['senha']" id="confirma" placeholder="Confirme a senha" maxlength="30" required onchange="confereSenha();"> <br> <br>

                <input class="button-2" id="meuForm" type="submit" value="Enviar">
                
            </form> -->
        </main>
<?php 
    require_once(footer_template);
?>
