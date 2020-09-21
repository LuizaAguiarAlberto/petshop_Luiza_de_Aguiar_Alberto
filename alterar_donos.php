<?php
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$telefone = $_POST['telefone'];

	include('cabecalho_conexao.php');
	
	$SQL = "UPDATE donos SET nome='$nome', idade='$idade', telefone='$telefone' WHERE cpf='$cpf' ";

	
	include('rodape_conexao.php');
	
	header('location:menu.php');
?>