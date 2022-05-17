<?php
    session_start();
    include	'db_connect.php';
    include	'functions.php';

    $user_id = $_SESSION['user']['id'];

    $reset = intval($_POST['reset']);

    if($reset == 0){
        mysqli_query($connection,"DELETE FROM comparison where customer_id = '$user_id'");
        $_SESSION['flag']['bool'] = 0;
        header('Location: ../compare.php');
    }
?>