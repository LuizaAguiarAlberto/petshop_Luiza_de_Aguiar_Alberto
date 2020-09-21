<?php
	include("cabecalho.inc.php");
?>
	<form action="animais.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome_animal">
		<br>
		
		<label>CPF do dono:</label>
		<input type="text" name="cpf">
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade_animal">
		<br>
		
		<label>Especie:</label>
		<input type="text" name="especie">
		<br>
		
		<input type="submit" value="Salvar">
	
	</form>

	
<?php
	include("rodape.inc.php");
?>