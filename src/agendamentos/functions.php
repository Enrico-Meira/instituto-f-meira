<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	$agendamentos = null;
	$agendamento = null;

	/**
	 *  Listagem de agendamentos
	 */
	function index() 
	{
		global $agendamentos;

		if (isset($_POST['filtragem']))
        {   
			$_SESSION['filtro'] = $_POST['filtragem'];
            $agendamentos = find_all("agendamentos", $_SESSION['filtro']);   
        } else
		{
			$agendamentos = find_all("agendamentos", $_SESSION['filtro']);  
		}

        if (!empty($_POST['nome_usuario'])) 
        {
            $agendamentos = filter("agendamentos", "nome like '%" . $_POST['nome_usuario'] . "%'", $_SESSION['filtro']);
        }
	}
	
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