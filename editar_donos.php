<?php
	$cpf = $_GET['cpf'];
	include('cabecalho_conexao.php');
	$SQL = "SELECT d.* FROM animais a, donos d WHERE a.cpf=d.cpf AND d.cpf = '$cpf'";
	
	$alterar_dono = mysqli_query($con, $SQL);
	
	if($alterar_dono){
		if(mysqli_num_rows($alterar_dono)>0){
		
			while(($resultado = mysqli_fetch_assoc($alterar_dono)) != null){
				$cpf = $resultado['cpf'];
				$nome = $resultado['nome'];
				$idade = $resultado['idade'];
				$telefone = $resultado['telefone'];
			}		
		}
		else{
			echo "Dono não identificado no banco de dados";
		}
	}
	else{
		echo "Há um problema na sintaxe do SQL";
		echo mysqli_error ($con);
	}
	
	echo'
	<form action="alterar_donos.php" method="POST">
	
		<label>CPF:</label>
		<input type="text" name="cpf" value="'.$cpf.'" readonly="readonly">
		<br>
		
		<label>Nome:</label>
		<input type="text" name="nome" value="'.$nome.'">
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade" value="'.$idade.'">
		<br>
		
		<label>Telefone:</label>
		<input type="text" name="telefone" value="'.$telefone.'">
		<br>
		
		
		
		<input type="submit" value="Salvar Dados do Dono">		
	</form>	
	';

	mysqli_close($con);

?>