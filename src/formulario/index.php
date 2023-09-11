<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>
        <main>
            <h3>Formulário</h3>
            <form method="get" action="calendario.html" enctype="multipart/form-data">     
                <input type="text" name="clientes['name']" id="nome-completo" placeholder="Nome completo" required> <br> <br>

                <input type="text" name="clientes['']" id="endereco" placeholder="Endereço" required> <br> <br>

                <input type="text" name="celular" id="celular" placeholder="Celular" required> <br> <br>

                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Descrição"></textarea> <br> <br>

                <label>Data de nascimento:</label> <br>
                <input type="date" name="data" required> <br> <br>

                <label>Gênero:</label> <br>

                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="feminino">

                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="masculino">

                <label for="personalizado">Personalizado</label>
                <input type="radio" name="genero" id="personalizado" value="personalizado">

                <br>
                <br>

                <input type="email" name="email" id="email" placeholder="Email" required> <br> <br>
                <input type="password" name="senha" id="senha" placeholder="senha" required> <br> <br>
                <input type="password" name="senha_confirma" id="senha_confirma" placeholder="confirme a senha" required> <br> <br>

                <input onclick="redirecionar()" id="meuForm" type="submit" value="Enviar">

                
            </form>
        </main>
<?php 
    require_once(footer_template);
?>
