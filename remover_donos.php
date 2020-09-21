<?php
	$cpf = $_GET['cpf'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM donos WHERE cpf= '$cpf'";
	
	include('rodape_conexao.php');
	
	header('location:cons_todos_donos.php');
?>