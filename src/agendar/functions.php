<?php
    
	require_once('../../config.php');
	require_once(dbpath);

    if(!isset($_SESSION))
    {
      session_start();
    }
	/**
		 *  Cadastro de agendamentos
		*/
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Allow-Headers: Content-Type");
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		// Verifica se o parâmetro "data_agenda" foi enviado
		if (isset($_POST['data_agenda'])) {
			$dataRecebida = json_decode($_POST['data_agenda'], true);
			$data = array();			   
			$data['id_clientes'] = $_SESSION['id_clientes']; 
			$data['id_procedimentos'] = $_SESSION['id_proced'];
			$data['data_agenda'] = $dataRecebida;
			$data['status_agenda'] = "aguardando";
	
			save('agendamentos', $data);
			header('location: index.php');
		} else {
			echo "Erro: Parâmetro 'data_agenda' não foi enviado.";
		}
	} else {
		echo "Erro: Método de requisição inválido.";
	}




?>
