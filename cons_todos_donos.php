<?php
	include('cabecalho_conexao.php');
	$SQL = "SELECT * FROM donos";
	
	$donos_dados = mysqli_query($con, $SQL);
	if($donos_dados){
		if(mysqli_num_rows($donos_dados)>0){
			echo"<table border='1'>";
			echo"<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Idade</th>
					<th>CPF</th>
					<th colspan='2'>Operacoes</th>
				</tr>";
			while(($resultado = mysqli_fetch_assoc($donos_dados)) != null){
				echo '<tr>';
					echo '<td> '.$resultado["nome"].'</td>';
					echo '<td> '.$resultado["telefone"].'</td>';
					echo '<td> '.$resultado["idade"].'</td>';
					echo '<td> '.$resultado["cpf"].'</td>';
					
					echo '<td><a href="editar_donos.php?cpf='.$resultado["cpf"].'">Editar Dono</a></td>';
					echo '<td><a href="remover_donos.php?cpf='.$resultado["cpf"].'">Remover Dono</a></td>';
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