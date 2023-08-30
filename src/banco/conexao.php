<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "fm_tcc";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco);
	$banco = mysqli_select_db($conexao, $banco);
	$conexao -> set_charset("utf8");
	
	if ($conexao->connect_errono()) 
	{
		die("Falha de conexão com banco de dados: ". 
		mysqli_connect_error() . " ( " . mysqli_connect_errorno(). " )"
		);
	}
?>