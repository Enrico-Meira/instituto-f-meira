<?php
    require_once('functions.php');
    $head = "cabecalho2";
    include(header_template);
    add();
?>

        <main>
            <h3>Formulário</h3>
            <form class="formProced" method="post" action="index.php" enctype="multipart/form-data">     
                <input type="text" name="clientes['nome']" id="nome-completo" placeholder="Nome completo"  > <br> <br>

                <input type="text" name="clientes['estado']" id="estado" placeholder="Estado"  > <br> <br>

                <input type="text" name="clientes['cidade']" id="cidade" placeholder="Cidade"  > <br> <br>

                <input type="text" name="clientes['bairro']" id="bairro" placeholder="Bairro"  > <br> <br>

                <input type="text" name="clientes['rua']" id="rua" placeholder="Rua"  > <br> <br>

                <input type="text" name="clientes['numero']" id="numero" placeholder="Número"  > <br> <br>

                <!-- <input type="text" name="clientes['celular']" id="celular" placeholder="Celular"  > <br> <br> -->

                <textarea name="clientes['descricao']" id="desc" cols="30" rows="10" placeholder="Descrição"></textarea> <br> <br>

                <!-- <label class="dateLabel">Data de nascimento:</label> <br>
                <input type="date" name="clientes['data_nasc']"  > <br> <br> -->

                <!-- <label>Gênero:</label> <br>

                <label class="form-control" for="feminino">Feminino</label>
                <input type="radio" name="clientes['genero']" id="feminino" value="feminino">

                <label class="form-control" for="masculino">Masculino</label>
                <input type="radio" name="clientes['genero']" id="masculino" value="masculino">

                <label class="form-control" for="outros">Personalizado</label>
                <input type="radio" name="clientes['genero']" id="outros" value="outros">

                <br>
                <br> -->

                <input type="email" name="clientes['email']" id="email" placeholder="Email"  > <br> <br>
                <input type="password" name="senha" id="senha" placeholder="Senha"  > <br> <br>
                <!-- criar validação de senha! -->
                <input type="password" name="clientes['senha']" id="senha_confirma" placeholder="Confirme a senha"  > <br> <br>

                <input class="button-2" id="meuForm" type="submit" value="Enviar">
                
            </form>
        </main>
<?php 
    require_once(footer_template);
?>
