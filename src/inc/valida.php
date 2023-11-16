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
            //$senha = criptografia($_POST['senha']);
            
            $sql = "SELECT id, nome, email, cpf password FROM clientes WHERE (email = '" . $cliente . "') AND (password = '" . $senha . "') LIMIT 1";
            $query = $bd->query($sql);

            if ($query->num_rows > 0)
            {
                $dados = $query->fetch_assoc();
                echo "<b>";
                var_dump($dados);
                echo "</b>";

                $id = $dados['id'];
                $nome = $dados['nome'];
                $email = $dados['email'];
                $password = $dados['password'];
                var_dump($email);

                if(!empty($email))
                {
                    if (!isset($_SESSION)) session_start();
                    $_SESSION['message'] = "Bem vindo" . $nome . "!";
                    $_SESSION['type'] = "info";
                    $_SESSION['id'] = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['email'] = $email;
                    echo "<b>";
                    var_dump($email);
                    echo "</b>";
                }

                else
                {
                    throw new Exception ("Não foi possível se conectar! <br> Verifique seu usuário e senha.");
                }

                header("Location: " . baseurl . "index.php");
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
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>

    <header>
        <a href="<?php echo baseurl ?>index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i></a>
    </header>
    
<?php 
	include(footer_template); 
	ob_end_flush();
?>