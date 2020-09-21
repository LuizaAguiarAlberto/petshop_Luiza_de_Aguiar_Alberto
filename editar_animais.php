<?php
	$cpf = $_GET['cpf'];
	include('cabecalho_conexao.php');
	$SQL = "SELECT a.* FROM animais a, donos d WHERE a.cpf=d.cpf AND a.cpf = '$cpf'";
	
	$alterar_animal = mysqli_query($con, $SQL);
	
	if($alterar_animal){
		if(mysqli_num_rows($alterar_animal)>0){
		
			while(($resultado = mysqli_fetch_assoc($alterar_animal)) != null){
				$cpf = $resultado['cpf'];
				$nome_animal = $resultado['nome'];
				$idade_animal = $resultado['idade'];
				$especie= $resultado['especie'];
			}		
		}
		else{
			echo "Animal não identificado no banco de dados";
		}
	}
	else{
		echo "Há um problema na sintaxe do SQL";
		echo mysqli_error ($con);
	}
	
	echo'
	<form action="alterar_animais.php" method="POST">
	
		<label>CPF:</label>
		<input type="text" name="cpf" value="'.$cpf.'" readonly="readonly">
		<br>
		
		<label>Nome:</label>
		<input type="text" name="nome_animal" value="'.$nome_animal.'">
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade_animal" value="'.$idade_animal.'">
		<br>
		
		<label>Especie:</label>
		<input type="text" name="especie" value="'.$especie.'">
		<br>
		
		
		
		<input type="submit" value="Salvar Dados do Animal">		
	</form>	
	';

	mysqli_close($con);

?>