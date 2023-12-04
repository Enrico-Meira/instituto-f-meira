<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	/**
 	 *  Cadastro de agendamentos
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


	$agendamentos = null;
	$agendamento = null;

	/**
	 *  Listagem de agendamentos
	 */
	function index() {
		global $agendamentos;
		$agendamentos = find_all('agendamentos');
	}

	function testa_email() 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'verifica_email') 
		{
			$email = $_POST['email'];
			echo email_query($email);
		}
	}

	/**
 	 *  Cadastro de agendamentos
	 */
	/**
	 *	Atualizacao/Edicao de agendamento
	*/
	function edit() {

		if (isset($_GET['id'])) {
	
			$id = $_GET['id'];
	
			if (isset($_POST['agendamentos'])) {
		
				$agendamento = $_POST['agendamentos'];
		
				update('agendamentos', $id, $agendamento);
				header('location: index.php');
			} else {
		
				global $agendamento;
				$agendamento = find('agendamentos', $id);
			} 
		
		} else {
		header('location: index.php');
		}
	}
	/**
	 *  Visualização de um agendamento
	 */
	function view($id = null) {
		global $agendamento;
		$agendamento = find('agendamentos', $id);
	}
	/**
	 *  Exclusão de um agendamento
	 */
	function delete($id = null) {

		global $agendamento;
		$agendamento = remove('agendamentos', $id);
		
		header('location: index.php');
	}

?>
