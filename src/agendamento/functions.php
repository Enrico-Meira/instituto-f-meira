<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	/**
 	 *  Cadastro de Clientes
	 */
	function add() {

		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			// Verifica se o parâmetro "data_agendada" foi enviado
			if (isset($_POST['data_agendada'])) {
				$dataRecebida = $_POST['data_agendada'];
		
				// Aqui você pode realizar operações com o dado recebido
				// Neste exemplo, apenas um echo para demonstração
				echo "Dado recebido no PHP: " . $dataRecebida;
			} else {
				echo "Erro: Parâmetro 'data_agendada' não foi enviado.";
			}
		} else {
			echo "Erro: Método de requisição inválido.";
		}

		save('agendamentos', $dataRecebida);
		header('location: index.php');
	}
	
?>