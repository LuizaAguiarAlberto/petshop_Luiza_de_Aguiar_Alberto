<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$idade = $_POST['idade'];
	$cpf = $_POST['cpf'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO donos (nome, telefone, idade, cpf)
			VALUE ('$nome', '$telefone', $idade, '$cpf')";
	$mostrar = "Dono cadastrado com sucesso!<br>";
	include('rodape_conexao.php');
?>