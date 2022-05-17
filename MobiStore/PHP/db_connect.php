<?php
	$host = "localhost";
	$user = "Vardan";
	$pass = "Vardan.02";
	$db_name = "mobistore";

	$connection = mysqli_connect($host, $user,$pass,$db_name);

	if(!$connection){
		echo 'Error with connection';
	}
?>