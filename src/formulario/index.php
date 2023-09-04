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

                <label>Data de nascimento:</label><br>
                <select name="dia">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <select name="mes">
                    <option value="jan">Jan</option>
                    <option value="fev">Fev</option>
                    <option value="mar">Mar</option>
                    <option value="abr">Abr</option>
                    <option value="mai">Mai</option>
                </select>

                <select name="ano">
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                </select>

                <br>
                <br>

                <label>Gênero:</label><br>

                <label for="feminino">Feminino</label>
                <input type="radio" name="genero" id="feminino" value="feminino">

                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="masculino" value="masculino">

                <label for="personalizado">Personalizado</label>
                <input type="radio" name="genero" id="personalizado" value="personalizado">

                <br>
                <br>

                <!-- <input type="file" name="" id=""> -->

                <!-- <br> -->
                <!-- <br> -->

                <input type="text" name="email" id="email" placeholder="Email" required> <br> <br>


                <input onclick="redirecionar()" id="meuForm" type="submit" value="Enviar">

                
            </form>
        </main>
<?php 
    require_once(footer_template);
?>
