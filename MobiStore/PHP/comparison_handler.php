<?php
   session_start();
   include	'db_connect.php';
   include	'functions.php';

   $item_1 = $_GET['item_id_1'];
   $item_2 = $_GET['item_id_2'];
  
    @$user_id = $_SESSION['user']['id'];
  
      if ($item_1 == null and $item_2 == null){
    $_SESSION['message'] = '* Ընտրեք 2 հեռախոս համեմատման համար';
    header('Location: ../compare.php');
   }else if ($item_1 == null and $item_2 !=null){
    $_SESSION['message'] = '* Ընտրեք 2 հեռախոս համեմատման համար';
    header('Location: ../compare.php');
   }else if($item_1 !=null and $item_2 == null){
    $_SESSION['message'] = '* Ընտրեք 2 հեռախոս համեմատման համար';
    header('Location: ../compare.php');
   }else {
      @$_SESSION['items']= [
         'item_1' => $item_1,
         'item_2' => $item_2,
      ];
       mysqli_query($connection,"INSERT INTO `comparison`( `customer_id`, `item_id_1`, `item_id_2`) VALUES ('$user_id','$item_1','$item_2')");
       $_SESSION['flag']['bool'] = 1;
       header('Location: ../compare.php');
   }


   
?>