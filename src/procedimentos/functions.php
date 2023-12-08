<?php
    
	require_once('../../config.php');
	require_once(dbpath);


	function view( $id = null) {
		global $nomeProcedimento;
		$nomeProcedimento = find('procedimentos', $id, null);
	}

?>
