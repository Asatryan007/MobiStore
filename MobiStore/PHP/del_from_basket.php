<?php
session_start();
include	'db_connect.php';
include	'functions.php';

$user_id = $_SESSION['user']['id'];
$del_item_id = $_GET['del_item_id'];

mysqli_query($connection,"DELETE FROM `basket` WHERE `assortment_id` = '$del_item_id' and `customer_id` = '$user_id' ");

header("Location: ../profile.php")
?>