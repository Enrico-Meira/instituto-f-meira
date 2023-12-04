<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	/**
 	 *  Cadastro de Clientes
	 */

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: POST");
		header("Access-Control-Allow-Headers: Content-Type");

		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			// Verifica se o parâmetro "data_agendada" foi enviado
			if (isset($_POST['data_agenda'])) {
				$dataRecebida = $_POST['data_agenda'];
				$dataRecebida['agenda_status'] = "aguardando";

				echo $dataRecebida;
				die();
		
				save('agendamentos', $dataRecebida);
				header('location: index.php');

			} else {
				echo "Erro: Parâmetro 'data_agenda' não foi enviado.";
			}
		} else {
			echo "Erro: Método de requisição inválido.";
		}

?>