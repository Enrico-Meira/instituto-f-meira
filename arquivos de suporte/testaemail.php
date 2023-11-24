<?php
// Função para verificar se o e-mail já existe no banco de dados
function checkEmail($email, $conn) {
    $sql = "SELECT * FROM sua_tabela WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return "E-mail já existe no banco de dados!";
    } else {
        return "";
    }
}

// Função para adicionar dados ao banco de dados
function addData($email, $conn) {
    // Executar a lógica para adicionar dados ao banco de dados
    // ...

    return "Dados adicionados com sucesso!";
}

// Conexão com o banco de dados
$servername = "seu_servidor_mysql";
$username = "seu_usuario_mysql";
$password = "sua_senha_mysql";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar se é uma solicitação POST para check email
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'check_email') {
    $email = $_POST['email'];
    echo checkEmail($email, $conn);
}

// Verificar se é uma solicitação POST para adicionar dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'add_data') {
    $email = $_POST['email'];
    echo addData($email, $conn);
}

$conn->close();
?>
