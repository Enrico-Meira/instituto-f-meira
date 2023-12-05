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
	   // Verifica se o parâmetro "data_agenda" foi enviado
	   if (isset($_POST['data_agenda'])) {
		   $dataRecebida = json_decode($_POST['data_agenda'], true);
		   $statusAgenda = "aguardando";
		   $data = array();
		   $data['data_agenda'] = $dataRecebida;
		   $data['status_agenda'] = $statusAgenda;
	
		   save('agendamentos', $data);
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
				$agendamento = find_all('agendamentos');
			} 
		
		} else {
		header('location: index.php');
		}
	}
	/**
	 *  Visualização de um agendamento
	 */
	function view( $id = null) {
		global $nomeCliente;
		$nomeCliente = find('clientes', $id);
	}

	function view2( $id = null) {
		global $nomeProcedimento;
		$nomeProcedimento = find('procedimentos', $id);
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
