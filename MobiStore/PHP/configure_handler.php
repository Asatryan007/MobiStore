<?php
    session_start();
    include	'db_connect.php';
    include	'functions.php';

    $id = $_SESSION['user']['id'];

    if(isset($_POST['save'])){
        if(!empty(trim($_POST['name'])) and !empty(trim($_POST['surname'])) and !empty(trim($_POST['email']))){
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $email = trim($_POST['email']);

            $user = mysqli_query($connection, "SELECT * FROM customer WHERE customer_id = '$id' ");
            $row_user = mysqli_fetch_assoc($user);

            if($row_user['name'] != $name){
                $update = mysqli_query($connection,"UPDATE customer set `name` = '$name' where customer_id = '$id' ");
                $_SESSION['user']['name'] = $name;

            }else if($row_user['surname'] != $surname){
                $update = mysqli_query($connection,"UPDATE customer set `surname` = '$surname' where customer_id = '$id' ");
                $_SESSION['user']['surname'] = $surname;

            }else if($row_user['email'] != $email){
                $users = mysqli_query($connection,"SELECT email from customer");
                $arr_email = [];
                while ( $row1 = mysqli_fetch_assoc($users)){
                    array_push($arr_email,$row1['email']);
                }
                
                    if( in_array($email,$arr_email)){// checking is this email are in baser or not
                        $_SESSION['message'] = '* Email-ը փոխելու հարցումը մերժված է, նշված E-mail-ը արդեն գրանցված է';
                        header('Location: ../profile.php');
                    }else{
                       
                        $update = mysqli_query($connection,"UPDATE customer set `email` = '$email' where customer_id = '$id' ");
                        $_SESSION['user']['email'] = $email;
                        header('Location: ../profile.php');
                    }
            }
            
        }
        header('Location: ../profile.php');
    }

    if(isset($_POST['reset'])){
        header("Location: ../profile.php");
    }

    if(isset($_POST['change'])){
        if(!empty(trim($_POST['pass'])) and !empty(trim($_POST['new_pass'])) and !empty(trim($_POST['c_n_pass']))){
            $pass = strtolower(trim($_POST['pass']));
            $npass = strtolower(trim($_POST['new_pass']));
            $cnpass = strtolower(trim($_POST['c_n_pass']));

            $pass =  crypt($pass,"ndxfjshfslkdksnrw42524234623232");

            $user = mysqli_query($connection, "SELECT * FROM customer WHERE customer_id = '$id' ");
            $row_user = mysqli_fetch_assoc($user);

            if($npass != $cnpass){
                $_SESSION['message'] = '* Գաղտնաբառերը չեն համապատասխանում';
                header('Location: ../configure.php');	
            }else if($row_user['password'] == $pass){

                    $npass =  crypt($npass,"ndxfjshfslkdksnrw42524234623232");

                    $update = mysqli_query($connection,"UPDATE customer set `password` = '$npass' where customer_id = '$id' ");
                }else{
                    $_SESSION['message'] = '* Հին  գաղտնաբառը չի համապատասխանում';
                    header('Location: ../configure.php');	
                }
        }
        header("Location: ../configure.php");
    }
?>