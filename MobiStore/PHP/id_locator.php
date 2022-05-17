<?php
    session_start();
	include	'db_connect.php';

    if(isset($_SESSION['item']['id'])){
        $_SESSION['item']['id'] = null;
    }

            @ $id = $_POST['id'];
            $_SESSION['product'] = [
                 'id' => $id,
               ];
             header('Location: ../assortment_item.php');
?>