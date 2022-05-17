<?php
    session_start();
	include	'db_connect.php';
	include	'functions.php';

    @$basket_id = intval($_POST['basket']);
    @$user_id = intval($_SESSION['user']['id']);

    
    mysqli_query($connection,"INSERT INTO `basket`( `customer_id`, `assortment_id`) VALUES ('$user_id', '$basket_id')");


?>