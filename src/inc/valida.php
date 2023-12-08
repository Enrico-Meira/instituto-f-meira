<?php 
    ob_start();
    include("../../config.php");
    require_once(dbpath);
    include(header_template);

    if(!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha'])))
    {
        header("Location:" . baseurl . "index.php");
        exit;
    }

    $bd = open_database();
    try {
        $bd -> select_db(db_name);
        $cliente = $_POST['login'];
        $senha = $_POST['senha'];

        if(!empty($cliente) && !empty($senha))
        {
            
            $sql = "SELECT id_clientes, nome, email, cpf, senha FROM clientes WHERE (email = '" . $cliente . "') AND (senha = '" . $senha . "') LIMIT 1";
            $query = $bd->query($sql);
            if ($query->num_rows > 0)
            {
                $dados = $query->fetch_assoc();
                $id = $dados['id_clientes'];
                $nome = $dados['nome'];
                $email = $dados['email'];
                $cpf = $dados['cpf'];
                $senha = $dados['senha'];

                if(!empty($email))
                {
                    if (!isset($_SESSION)) session_start();
                        $_SESSION['message'] = "Bem vindo" . $nome . "!";
                        $_SESSION['type'] = "info";
                        $_SESSION['id_clientes'] = $id;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['email'] = $email;
                        $_SESSION['cpf'] = $cpf;
                        $_SESSION['senha'] = $senha;
                        $_SESSION['filtro'] = "id_agendamentos DESC";

                        var_dump($_SESSION);
                }

                else
                {
                    throw new Exception ("Não foi possível se conectar! <br> Verifique seu usuário e senha.");
                }
                header("Location: " . baseurl . "/index.php");
            }

            else
            {
                throw new Exception("Não foi possível se conectar! <br> Verifique seu usuário e senha.");
            }
        }
        else
        {
            throw new Exception("Não foi possível se conectar! <br> Verifique seu usuário e senha.");
        }
    }
     catch (Exception $e) {
        $_SESSION['message'] = "Ocorreu um erro: " . $e->GetMessage();
        $_SESSION['type'] = "danger";
    }
?>


<?php if(!empty($_SESSION['message'])) : ?>

    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert" id="actions">
        <?php echo $_SESSION['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>

<?php 
	include(footer_template); 
	ob_end_flush();
?>