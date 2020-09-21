<?php
include('cabecalho.inc.php')
?>
	<form action="cons_cpf.php" method="POST">
		<label>CPF do dono:</label>
		<input type="text" name="cpf">
		<br>

		<input type="submit" value="Consultar">		
	</form>

	
<?php
	include("rodape.inc.php");
?>