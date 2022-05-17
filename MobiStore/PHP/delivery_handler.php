<?php
	session_start();
	include	'db_connect.php';
	include	'functions.php';

    $user_id = $_SESSION['user']['id'];
    $item_id = $_POST['item_id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment = $_POST['payment_type'];
    $note = $_POST['notes'];
    $quantity = $_POST['quantity'];

    

    if($email != null and $phone != null and $address != null and $payment != null and $note == null){
        mysqli_query($connection,"INSERT INTO `orders`( `customer_id`, `assortment_id`, `email`, `phone`, `quantity`, `address`, `payment_type`) 
        VALUES('$user_id', '$item_id','$email', '$phone','$quantity','$address','$payment')");
        header("Location: ../success.php");
    }
    else if($email != null and $phone != null and $address != null and $payment != null and $note != null){
        mysqli_query($connection,"INSERT INTO `orders`( `customer_id`, `assortment_id`, `email`, `phone`, `quantity`, `address`, `payment_type`,`notes`) 
        VALUES('$user_id', '$item_id','$email', '$phone','$quantity','$address','$payment', '$note')");
        header("Location: ../success.php");
    }

?>