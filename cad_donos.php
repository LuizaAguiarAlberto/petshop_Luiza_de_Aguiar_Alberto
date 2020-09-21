<?php
	include("cabecalho.inc.php");
?>
	<form action="donos.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome">
		<br>
		
		<label>Telefone:</label>
		<input type="text" name="telefone">
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade">
		<br>
		
		<label>CPF:</label>
		<input type="text" name="cpf">
		<br>
		
		<input type="submit" value="Salvar">
	
	</form>

	
<?php
	include("rodape.inc.php");
?>