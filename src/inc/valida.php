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
            
            $sql = "SELECT nome, email, cpf, senha FROM clientes WHERE (email = '" . $cliente . "') AND (senha = '" . $senha . "') LIMIT 1";
            $query = $bd->query($sql);
            var_dump($sql);
            if ($query->num_rows > 0)
            {
                $dados = $query->fetch_assoc();
                $nome = $dados['nome'];
                $email = $dados['email'];
                $cpf = $dados['cpf'];
                $password = $dados['password'];


                if(!empty($email))
                {
                    if (!isset($_SESSION)) 
                    {
                        session_start();
                        $_SESSION['message'] = "Bem vindo" . $nome . "!";
                        $_SESSION['type'] = "info";
                        $_SESSION['nome'] = $nome;
                        $_SESSION['email'] = $email;
                    }
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

<!-- <?php if(!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert" id="actions">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>

    <header>
        <a href="<?php echo baseurl ?>index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i></a>
    </header> -->
    
<?php 
	include(footer_template); 
	ob_end_flush();
?>