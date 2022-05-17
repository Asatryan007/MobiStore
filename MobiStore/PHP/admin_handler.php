<?php
    session_start();
	include	'db_connect.php';
	include	'functions.php';

    if(isset($_POST['add'])){
        $brand = trim($_POST['brand']);
        $model = trim($_POST['model']);
        $product_name = trim($_POST['product_name']);
        $year_of_issue = trim($_POST['year_of_issue']);
        $img = $_FILES['image']['name'];
        $parametr_1 = trim($_POST['parametr_1']);
        $parametr_2 = trim($_POST['parametr_2']);
        $parametr_3 = trim($_POST['parametr_3']);
        $parametr_4 = trim($_POST['parametr_4']);
        $parametr_5 = trim($_POST['parametr_5']);
        $parametr_6 = trim($_POST['parametr_6']);
        $parametr_7 = trim($_POST['parametr_7']);
        $parametr_8 = trim($_POST['parametr_8']);
        $parametr_9 = trim($_POST['parametr_9']);
        $cash_price = intval(trim($_POST['cash_price']));
        $credit_price = intval(trim($_POST['credit_price']));
        $credit_monthly = intval(trim($_POST['credit_monthly']));
        $availability = intval(trim($_POST['availability']));

        if(!empty($brand) and !empty($model) and !empty($product_name) and !empty($year_of_issue)  and !empty($parametr_1) and !empty($parametr_2) and !empty($parametr_3) and
        !empty($parametr_4) and !empty($parametr_5) and !empty($parametr_6) and !empty($parametr_6) and !empty($parametr_7) and !empty($parametr_8) and !empty($parametr_9) and !empty($cash_price) 
        and !empty($credit_price) and !empty($credit_monthly) and !empty($availability)){
             mysqli_query($connection,"INSERT INTO `assortment`( `brand`, `model`, `product_name`, `year_of_issue`, `image`, `parametr_1`, `parametr_2`, `parametr_3`, `parametr_4`, `parametr_5`, `parametr_6`, `parametr_7`, `parametr_8`, `parametr_9`,  `cash_price`, `credit_price`, `credit_price_month`, `availability`) 
            VALUES ('$brand', '$model','$product_name', '$year_of_issue', '$img', '$parametr_1', '$parametr_2','$parametr_3','$parametr_4', '$parametr_5','$parametr_6', '$parametr_7','$parametr_8','$parametr_9','$cash_price', '$credit_price', '$credit_monthly', '$availability')");
           $path = "../img/phones";
            move_uploaded_file($_FILES['image']['tmp_name'],"$path/$img");
            
           $_SESSION['message'] = 'Ապրանքը հաջողությամբ ավելացվել է';
		    header('Location: ../admin_panel.php');
            }else{
                $_SESSION['message'] = 'Ապրանքը չի ավելացվել կրկին փորձեք';
		         header('Location: ../admin_panel.php');
            }
        }
    
    if(isset($_POST['update'])){
        $id = intval(trim($_POST['id']));
        $model = trim($_POST['model']);
        $cash_price = intval(trim($_POST['cash_price']));
        $credit_price = intval(trim($_POST['credit_price']));
        $credit_monthly = intval(trim($_POST['credit_monthly']));
        $availability = intval(trim($_POST['availability']));

        if(!empty($id)){
            if(!empty($cash_price) and !empty($credit_price) and !empty($credit_monthly)){
                mysqli_query($connection,"UPDATE assortment SET cash_price = '$cash_price', credit_price = '$credit_price', credit_price_month = '$credit_monthly' WHERE assortment_id = '$id' ");
                $_SESSION['message_upd'] = 'Ապրանքը հաջողությամբ թարմացվել է';
		        header('Location: ../admin_panel.php');
            }else if(!empty($availability)){
                mysqli_query($connection,"UPDATE assortment SET `availability` = '$availability'  WHERE assortment_id = '$id' ");
                $_SESSION['message_upd'] = 'Ապրանքը հաջողությամբ թարմացվել է';
		        header('Location: ../admin_panel.php');
            }else{
                $_SESSION['message_upd'] = 'Ապրանքը չի թարմացվել';
		        header('Location: ../admin_panel.php');
            }
        }else if(!empty($model)){
            if(!empty($cash_price) and !empty($credit_price) and !empty($credit_monthly)){
                mysqli_query($connection,"UPDATE assortment SET cash_price = '$cash_price', credit_price = '$credit_price', credit_price_month = '$credit_monthly' WHERE model = '$model' ");
                $_SESSION['message_upd'] = 'Ապրանքը հաջողությամբ թարմացվել է';
		        header('Location: ../admin_panel.php');
            
            }else if(!empty($availability)){
                mysqli_query($connection,"UPDATE assortment SET `availability` = '$availability'  WHERE model = '$model' ");
                $_SESSION['message_upd'] = 'Ապրանքը հաջողությամբ թարմացվել է';
		        header('Location: ../admin_panel.php');
            }else{
                $_SESSION['message_upd'] = 'Ապրանքը չի թարմացվել';
		        header('Location: ../admin_panel.php');
             }
            }
            $_SESSION['message_upd'] = 'Ապրանքը չի թարմացվել, դաշտերի դատարկ լինելու պատճառով';
		        header('Location: ../admin_panel.php');
        }


    @$status = $_POST['status'];
    @$user_id = $_POST['user_id'];
    @$item_id = $_POST['item_id'];
    mysqli_query($connection,"UPDATE orders SET order_fulfillment = '$status' where assortment_id = '$item_id' and customer_id = '$user_id'");


?>