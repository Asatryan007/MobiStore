<?php
    session_start();
    include 'db_connect.php';
    include	'php/functions.php';

    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user']['id'];

    if($email != null and $topic != null and $message != null){
        mysqli_query($connection, "INSERT INTO `feedbacks`( `email`, `topic`,`feedback`, `user_id`) VALUES ('$email','$topic','$message','$user_id')");
        header('Location: ../contact.php');
    }else{
        $_SESSION['message'] = '* Լրացրեք բոլոր դաշտերը';
		header('Location: ../contact.php');
    }

?>