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
	/**
 	 *  Cadastro de Clientes
	 */
	function add() {

		if (!empty($_POST['cliente'])) {
		
		$today = new DateTime("now");

		$cliente = $_POST['cliente'];
		$cliente['modified'] = $cliente['created'] = $today->format("Y-m-d H:i:s");

		save('clientes', $cliente);
		header('location: index.php');
		}
	}
	/**
	 *	Atualizacao/Edicao de Cliente
	*/
	function edit() {

		$now = new DateTime("now");
			//date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
		if (isset($_GET['id'])) {
	
			$id = $_GET['id'];
	
			if (isset($_POST['cliente'])) {
		
				$cliente = $_POST['cliente'];
				$cliente['modified'] = $now->format("Y-m-d H:i:s");
		
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