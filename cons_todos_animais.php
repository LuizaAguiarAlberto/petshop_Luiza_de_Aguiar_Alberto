<?php
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM animais";
	
	$animais_dados = mysqli_query($con, $SQL);
	if($animais_dados){
		if(mysqli_num_rows($animais_dados)>0){
			echo"<table border='1'>";
			echo"<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Idade</th>
					<th>Especie</th>
					<th colspan='2'>Operacoes</th>
				</tr>";
			while(($resultado = mysqli_fetch_assoc($animais_dados)) != null){
				echo '<tr>';
					echo '<td> '.$resultado["nome"].'</td>';
					echo '<td> '.$resultado["cpf"].'</td>';
					echo '<td> '.$resultado["idade"].'</td>';
					echo '<td> '.$resultado["especie"].'</td>';
					
					echo '<td><a href="editar_animais.php?cpf='.$resultado["cpf"].'">Editar Animal</a></td>';
					echo '<td><a href="remover_animais.php?cpf='.$resultado["cpf"].'">Remover Animal</a></td>';
				echo '</tr>';
			}
			echo "</table>";	
		}
	}
	else{
		echo"Sintaxe SQL apresentando um problema<br>";
		echo mysqli_error($con);
	}
	
	mysqli_close($con);
	
?>