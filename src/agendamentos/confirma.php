<?php

require_once('../../config.php');
require_once(dbpath);

if(!isset($_SESSION)) 
{ 
    session_start();
}

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];

    $database = open_database();

    $sql = "UPDATE agendamentos SET status_agenda = 'confirmado' WHERE id_agendamentos = $id";

    try {

    $database->query($sql);

    header('location: admPanel.php');
    
    } catch (Exception $e) { 
    
    $_SESSION['message'] = 'Não foi possivel realizar a operação.';
    $_SESSION['type'] = 'danger';
    } 
}
else 
{
    header("location: admPanel.php");
}

close_database($database);

?>