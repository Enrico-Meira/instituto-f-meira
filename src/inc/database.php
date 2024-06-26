<?php 
    mysqli_report(MYSQLI_REPORT_STRICT);
        
    date_default_timezone_set("America/Sao_Paulo");

    function formataCPF($cpf)
    {
        return substr($cpf, 0, 3) . "." . substr($cpf, 2, 3) . "." . substr($cpf, 5, 3) . "-" . substr($cpf, 8, 2);
    }

    function formataData($data, $formato) 
    {
        $d = new Datetime($data);
        return $d->format($formato);
    }

    function formataTelefone($fone) 
    {
            return "(" . substr($fone, 0, 2) . ") " .
            substr($fone, 2, 4) . "-" . substr($fone, 6, 4);
    }

    function formataCelular($cell) 
    {
        return "(" . substr($cell, 0, 2) . ") " .
        substr($cell, 2, 4) . "-" . substr($cell, 4, 8);
    }

    function open_database() 
    {
        try {
            $conn = new mysqli( db_host, db_user, db_pass, db_name);
            $conn -> set_charset ("utf-8");
            return $conn;
        } catch (Exception $e) {
            echo "<h3>Ocorreu um erro:\n<br>" . $e->getMessage() . "</h3>";
            return null;
        }
    }

    function close_database($conn) 
    {
        try {
            mysqli_close($conn);
        } catch (Exception $e) {
            echo "<h3>Ocorreu um erro:\n<br>" . $e->getMessage() . "</h3>";
        }
    }

    /**
	 *  Pesquisa um Registro pelo ID em uma Tabela
	 */
	function find( $table = null, $id = null, $order = null ) 
    {
		$database = open_database();
		$found = null;

		try {
		if ($id) {
			$sql = "SELECT * FROM " . $table . " WHERE id_procedimentos = " . $id;

			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {	
			$found = $result->fetch_assoc();
			}
		} else {
			$sql = "SELECT id_agendamentos, nome, procedimento, data_agenda, status_agenda FROM $table a 
			INNER JOIN clientes c ON a.id_clientes = c.id_clientes 
			INNER JOIN procedimentos p on a.id_procedimentos = p.id_procedimentos 
			ORDER BY $order";
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
			$found = $result->fetch_all(MYSQLI_ASSOC);
			}
		}
		} catch (Exception $e) {
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
		
		close_database($database);
		return $found;
	}

	function filter( $table = null, $p = null, $order = null ) 
	{
		$database = open_database();
		$found = null;

		try 
		{
			if ($p) 
			{
				$sql = "SELECT id_agendamentos, nome, procedimento, data_agenda, status_agenda FROM $table a 
				INNER JOIN clientes c ON a.id_clientes = c.id_clientes 
				INNER JOIN procedimentos p on a.id_procedimentos = p.id_procedimentos
				WHERE $p 
				ORDER BY $order";
				$result = $database->query($sql);
			
				if ($result->num_rows > 0) 
				{	
					$found = array();
					while ($row = $result->fetch_assoc()) 
					{
						array_push($found, $row);
					}
				}
			} 
			else 
			{
				throw new Exception("Não foram encontrados registros de dados!");
			}
		}
		catch (Exception $e) 
		{
		$_SESSION['message'] = "Ocorreu um erro: " . $e->GetMessage();
		$_SESSION['type'] = 'danger';
		}

		close_database($database);
		return $found;
	}
		
	/**
	 *  Pesquisa Todos os Registros de uma Tabela
	 */
	function find_all( $table, $order ) 
    {
		return find($table, null , $order);
	}

	function teste ($data)
	{
		$database = open_database();
		

		$sql = "SELECT * FROM agendamento WHERE data = " . $data;
		$result = $database->query($sql);
		//10:00


		close_database($database);
	}
	// gera um id único

	function gerar_id()
	{
		$id_gerado = null;

		try 
		{
			$id_gerado = uniqid();
			return $id_gerado;
		} 
		catch (Exception $e) 
		{
			$_SESSION['message'] = "Erro ao tentar gerar ID: " . $e->GetMessage();
			$_SESSION['type'] = 'danger';
		}
	}

	function email_query ($email)
	{
		$database = open_database();

		$sql = "SELECT email FROM clientes WHERE " . $email . " = email";
		$result = $database->query($sql);

		if ($result -> num_rows > 0) 
		{
			return "E-mail já existe no banco de dados!";
		} 
		else 
		{
			return "";
		}


		close_database($database);
	}

	/**
	*  Insere um registro no BD
	*/
	function save($table = null, $data = null) 
    {
		$database = open_database();
	
		$columns = null;
		$values = null;
	
		//print_r($data);
	
		foreach ($data as $key => $value) {
		$columns .= trim($key, "'") . ",";
		$values .= "'$value',";
		}
	
		// remove a ultima virgula
		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');

		
		$sql = "INSERT INTO " . $table . " ($columns)" . " VALUES " . "($values);";

		try {

		$database->query($sql);
	
		$_SESSION['message'] = 'Registro cadastrado com sucesso.';
		$_SESSION['type'] = 'success';
		
		} catch (Exception $e) { 
		
		$_SESSION['message'] = 'Não foi possivel realizar a operação.';
		$_SESSION['type'] = 'danger';
		} 
	
		close_database($database);
	}
	/**
	 *  Atualiza um registro em uma tabela, por ID
	 */
	function update($table = null, $id = null, $data = null) 
    {
		$database = open_database();
	
		$items = null;
	
		foreach ($data as $key => $value) {
		$items .= trim($key, "'") . "='$value',";
		}
	
		// remove a ultima virgula
		$items = rtrim($items, ',');
	
		$sql  = "UPDATE " . $table;
		$sql .= " SET $items";
		$sql .= " WHERE id=" . $id . ";";
	
		try {
		$database->query($sql);
	
		$_SESSION['message'] = '<h3> Registro atualizado com sucesso. </h3>';
		$_SESSION['type'] = 'success';
	
		} catch (Exception $e) { 
	
		$_SESSION['message'] = '<h3> Nao foi possivel realizar a operacao. </h3>';
		$_SESSION['type'] = 'danger';
		} 
	
		close_database($database);
	}
	/**
	 *  Remove uma linha de uma tabela pelo ID do registro
	 */
	function remove( $table = null, $id = null ) 
    {
	    $database = open_database();
		
		try {
			if ($id) {

			$sql = "DELETE FROM " . $table . " WHERE id = " . $id;
			$result = $database->query($sql);

			if ($result == $database->query($sql)) {   	
				$_SESSION['message'] = "Registro Removido com Sucesso.";
				$_SESSION['type'] = 'success';
			}
			}
		} catch (Exception $e) { 

			$_SESSION['message'] = $e->GetMessage();
			$_SESSION['type'] = 'danger';
		}

		close_database($database);
	}

	function criptografia($senha)
    {

    }

	function clear_messages()
    {
        $_SESSION['message'] = null;
        $_SESSION['type'] = null;
    }


?>