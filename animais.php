<?php
	
	$nome_animal = $_POST['nome_animal'];
	$cpf = $_POST['cpf'];
	$idade_animal = $_POST['idade_animal'];
	$especie = $_POST['especie'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animais (nome, cpf, idade, especie)
			VALUE ('$nome_animal', '$cpf', $idade_animal, '$especie')";
	$mostrar = "Animal cadastrado com sucesso!<br>";
	include('rodape_conexao.php');
?>