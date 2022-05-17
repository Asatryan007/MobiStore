<?php
	session_start();
	include	'db_connect.php';


	$login = strtolower(trim($_POST['login']));
	$password = strtolower(trim($_POST['password']));

	$password = crypt($password,"ndxfjshfslkdksnrw42524234623232");

	$check_user = mysqli_query($connection, "SELECT * FROM `customer` WHERE `username` = '$login' AND `password`= '$password'");
	if(mysqli_num_rows($check_user) >0) {

		$user = mysqli_fetch_assoc($check_user);


		$_SESSION['user'] = [
			"id" => $user['customer_id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "gender" => $user['gender'],
            "email" => $user['email']
		];		        
		header('Location: ../profile.php');

	} else{
		$_SESSION['message'] = '* Սխալ Մուտքանուն կամ Գաղտնաբառ';
		header('Location: ../login.php');

	}
?>