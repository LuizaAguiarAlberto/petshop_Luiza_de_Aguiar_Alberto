<?php
	
	$cpf = $_POST['cpf'];
	include('cabecalho_conexao.php');
	$SQL = "SELECT a.* FROM animais a, donos d WHERE a.cpf=d.cpf AND a.cpf = '$cpf'";
	
	$dados_animais_cpf = mysqli_query($con, $SQL);
	
	if($dados_animais_cpf){
		if(mysqli_num_rows($dados_animais_cpf)>0){
		
			while(($resultado = mysqli_fetch_assoc($dados_animais_cpf)) != null){
				echo $resultado['nome']."--". $resultado['cpf'] ."--". $resultado['idade']."--". $resultado['especie']."<br>";
			}		
		}
		else{
			echo "Anmal não identificado no banco de dados";
		}
	}
	else{
		echo "Há um problema na sintaxe do SQL";
		echo mysqli_error ($con);
	}
	mysqli_close($con);
	echo "<a href='menu.php'>Voltar</a>";
	
?>