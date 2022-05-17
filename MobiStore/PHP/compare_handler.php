<?php
    session_start();
	include	'db_connect.php';
	include	'functions.php';
     
    $item_id_1 = 0;
    @$item_id_2 = intval($_POST['item_id_2']);
    @$user_id = intval($_SESSION['user']['id']);

    if($item_id_1 == 0){
        $item_id_1 = intval($_POST['item_id_1']);
        if($item_id_2 != $item_id_1){

            mysqli_query($connection,"INSERT INTO `camprison`( `customer_id`, `item_id_1`, `item_id_2`) VALUES ('$user_id','$item_id_1','$item_id_2')");
            }
    }
    
   
?>