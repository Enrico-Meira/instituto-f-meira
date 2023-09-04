<?php 
    mysqli_report(MYSQLI_REPORT_STRICT);
        
    date_default_timezone_set("America/Sao_Paulo");

    function formataCPF($cpf)
    {
        return substr($cpf, 0, 3) . "." . substr($cpf, 2, 3) . "." . substr($cpf, 5, 3) . "-" . substr($cpf, 8, 2);
    }

    function formataData($data, $formato) {
        $d = new Datetime($data);
        return $d->format($formato);
    }

    function formataTelefone($fone) {
            return "(" . substr($fone, 0, 2) . ") " .
            substr($fone, 2, 4) . "-" . substr($fone, 6, 4);
    }

    function formataCelular($cell) {
        return "(" . substr($cell, 0, 2) . ") " .
        substr($cell, 2, 4) . "-" . substr($cell, 4, 8);
    }

    function open_database() {
        try {
            $conn = new mysqli( db_host, db_user, db_pass, db_nome);
            $conn -> set_charset ("utf-8");
            return $conn;
        } catch (Exception $e) {
            echo "<h3>Ocorreu um erro:\n<br>" . $e->getMessage() . "</h3>";
            return null;
        }
    }

    function close_database($conn) {
        try {
            mysqli_close($conn);
        } catch (Exception $e) {
            echo "<h3>Ocorreu um erro:\n<br>" . $e->getMessage() . "</h3>";
        }
    }
?>