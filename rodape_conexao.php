<?php
$query = mysqli_query($con, $SQL);
	if($query){
			echo $mostrar;
			echo "<a href='menu.php'>Voltar</a>";
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>