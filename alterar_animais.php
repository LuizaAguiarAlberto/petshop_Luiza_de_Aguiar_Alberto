<?php
	$cpf = $_POST['cpf'];
	$nome_animal = $_POST['nome_animal'];
	$idade_animal = $_POST['idade_animal'];
	$especie = $_POST['especie'];

	include('cabecalho_conexao.php');
	
	$SQL = "UPDATE animais SET nome='$nome_animal', idade='$idade_animal', especie='$especie' WHERE cpf='$cpf' ";

	
	include('rodape_conexao.php');
	
	header('location:menu.php');
?>