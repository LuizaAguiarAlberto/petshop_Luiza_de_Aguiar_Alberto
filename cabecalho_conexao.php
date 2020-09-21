<?php
	$con = mysqli_connect("localhost", "Luiza", "caradelhama");
	if(!$con){
		echo mysqli_connect_error($con);
	}
	$db = mysqli_select_db($con, "petshop2");
	if(!$db){
		echo mysqli_error($con);
	}
	
	
?>