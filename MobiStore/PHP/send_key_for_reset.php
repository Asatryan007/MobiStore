<?php
    session_start();
	include	'db_connect.php';
	include	'functions.php';

    if(isset($_POST['submit'])){
        if(!empty(trim($_POST['email']))){
            $email  = $_POST['email'];
            $_SESSION['verify'] = [
                'mail' => $email,
            ];
            $result = mysqli_query($connection,"SELECT * FROM customer where email = '$email'");
            if(mysqli_num_rows($result) > 0){
                $key = rand(1000,9999);
                $subject = "Re-Set Password";
                $message = "Վերականգման համար նախատեսված կոդը։'․$key․'\n\n Եթե Դուք չեք ուղարկել հարցումը խորհուրդ է տրվում փոխել գաղտնաբառը";

                mail($email,$subject,$message,"FROM: 007mobistore@mail.ru");
                mysqli_query($connection,"UPDATE customer set `key_code` = $key where email = '$email'");
                
               header('Location: ../key_code_verify.php');
            }else{
                $_SESSION['message_forgot'] = '* Նման E-mail Գոյություն չունի';
	        	header('Location: ../login.php');
            }

        }
    };

    if(isset($_POST['confirm'])){
        if(!empty(trim($_POST['key']))){
            $ukey = $_POST['key'];
            if(strlen($ukey) != 4){
                $_SESSION['message'] = '* Սխալ մուտքագրված կոդ';
                header('Location: ../key_code_verify.php');
            }else{
                $user = mysqli_query($connection,"SELECT * FROM customer where key_code = '$ukey'");
                
                if(mysqli_num_rows($user) >0){
                    mysqli_query($connection,"UPDATE customer set `key_code` = null where key_code = '$ukey'");
                    header('Location: ../reset_pass.php');
                }else {
                    $_SESSION['message'] = '* Սխալ մուտքագրված կոդ';
                    header('Location: ../key_code_verify.php');
                }
                
            }
        }
    };

    if(isset($_POST['reset'])){
        if(!empty(trim($_POST['password']))){
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            $email =  $_SESSION['verify']['mail'];
            if($pass != $cpass){
                $_SESSION['message'] = '* Գաղտնաբառերը չեն համապատասխանում';
                header('Location: ../reset_pass.php');
            }else{
                $user = mysqli_query($connection,"SELECT * FROM customer where email = '$email'");
                var_dump($user);
                if(mysqli_num_rows($user) >0){
                    $pass = crypt($pass,"ndxfjshfslkdksnrw42524234623232");
                    mysqli_query($connection,"UPDATE customer set `password` = '$pass' where email = '$email'");
                    header('Location: ../login.php');
                }
                else{
                    echo 'hello';
                }
            }
        }
    }

?>