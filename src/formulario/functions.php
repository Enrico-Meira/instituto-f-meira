<?php
    
	require_once('../../config.php');
	require_once(dbpath);

	$cliente = null;

	/**
	 *  Listagem de Clientes
	 * 
	 */
	function testa_email() 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'verifica_email') 
		{
			$email = $_POST['email'];
			echo email_query($email);
		}
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

			var_dump($cliente);


			save('clientes', $cliente);
			header('location: index.php');
		}
	}


?>


	

