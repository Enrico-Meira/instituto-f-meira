<?php
    require_once('functions.php');
    variavel = "cabecalho2";
    include(header_template);   
?>

        <main>

            <?php echo gerador();?>
            <h3>Formulário</h3>
            <form class="formProced" method="get" action="calendario.html" enctype="multipart/form-data">     
                <input type="text" name="clientes['name']" id="nome-completo" placeholder="Nome completo" required> <br> <br>

                <input type="text" name="clientes['']" id="endereco" placeholder="Endereço" required> <br> <br>

                <input type="text" name="clientes['']" id="celular" placeholder="Celular" required> <br> <br>

                <textarea name="clientes['']" id="desc" cols="30" rows="10" placeholder="Descrição"></textarea> <br> <br>

                <label class="dateLabel">Data de nascimento:</label> <br>
                <input type="date" name="clientes['']" required> <br> <br>

                <label>Gênero:</label> <br>

                <label for="feminino">Feminino</label>
                <input type="radio" name="clientes['']" id="feminino" value="feminino">

                <label for="masculino">Masculino</label>
                <input type="radio" name="clientes['']" id="masculino" value="masculino">

                <label for="personalizado">Personalizado</label>
                <input type="radio" name="clientes['']" id="personalizado" value="personalizado">

                <br>
                <br>

                <input type="email" name="clientes['']" id="email" placeholder="Email" required> <br> <br>
                <input type="password" name="senha" id="senha" placeholder="senha" required> <br> <br>
                <input type="password" name="clientes['']" id="senha_confirma" placeholder="confirme a senha" required> <br> <br>

                <input id="meuForm" type="submit" value="Enviar">

                
            </form>
        </main>
<?php 
    require_once(footer_template);
?>
