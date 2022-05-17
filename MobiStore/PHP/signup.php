<?php
	session_start();
	include	'db_connect.php';

	$name = trim($_POST['name']);
	$surname = trim($_POST['surname']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);
	$username = strtolower(trim($_POST['username']));
	$password = strtolower(trim($_POST['password']));
	$password_confirm =strtolower(trim($_POST['password_confirm']));

	$result_user_info = mysqli_query($connection, "SELECT username, email FROM customer") ;
	if(mysqli_num_rows($result_user_info) > 0 ){
		while($row_user = mysqli_fetch_assoc($result_user_info)){
			if($row_user['username'] != $username and $row_user['email'] != $email and $password === $password_confirm ){
					
					$password = crypt($password,"ndxfjshfslkdksnrw42524234623232");

					mysqli_query($connection,"INSERT INTO `customer`( `name`, `surname`, `email`, `gender`, `username`, `password`) VALUES ('$name','$surname','$email','$gender', '$username','$password')");

					$_SESSION['message'] = "Գրանցումը հաջողությամբ ավարտվեց!";
					header('Location: ../login.php');
					break;
				}
				
			if($row_user['username'] === $username){
					$_SESSION['message'] = '* Մուտքանունը արդեն գոյություն ունի';
					header('Location: ../register.php');
					break;
			}
			if($row_user['email'] === $email){
					$_SESSION['message'] = '* Նշված E-mail-ը արդեն գրանցված է';
					header('Location: ../register.php');		
					break;
			}
			if( $password != $password_confirm){

				$_SESSION['message'] = '* Գաղտնաբառերը չեն համապատասխանում';
				header("Location: ../register.php");
				break;
			}
		}
	}
	else{

		$password = crypt($password,"ndxfjshfslkdksnrw42524234623232");

		mysqli_query($connection,"INSERT INTO `customer`( `name`, `surname`, `email`, `gender`, `username`, `password`) VALUES ('$name','$surname','$email','$gender', '$username','$password')");
		$_SESSION['message'] = "Գրանցումը հաջողությամբ ավարտվեց!";
		header('Location: ../login.php');
	}
?>