<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	$clientes = null;
	$cliente = null;

	/**
	 *  Listagem de Clientes
	 */
	function index() {
		global $clientes;
		$clientes = find_all('clientes');
	}

	function testa_email() 
	{
		email_query(['email']);
		die;
		echo ['email'];
	}

	/**
 	 *  Cadastro de Clientes
	 */
	function add() 
	{
		if (!empty($_POST['clientes'])) 
		{
			$cliente = $_POST['clientes'];
			$cliente['id_clientes'] = gerar_id();
			save('clientes', $cliente);
			header('location: index.php');
		}
	}
	/**
	 *	Atualizacao/Edicao de Cliente
	*/
	function edit() {

		if (isset($_GET['id'])) {
	
			$id = $_GET['id'];
	
			if (isset($_POST['clientes'])) {
		
				$cliente = $_POST['clientes'];
		
				update('clientes', $id, $cliente);
				header('location: index.php');
			} else {
		
				global $cliente;
				$cliente = find('clientes', $id);
			} 
		
		} else {
		header('location: index.php');
		}
	}
	/**
	 *  Visualização de um Cliente
	 */
	function view($id = null) {
		global $cliente;
		$cliente = find('clientes', $id);
	}
	/**
	 *  Exclusão de um Cliente
	 */
	function delete($id = null) {

		global $cliente;
		$cliente = remove('clientes', $id);
		
		header('location: index.php');
	}


?>


	

