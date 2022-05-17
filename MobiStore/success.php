<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
    <link rel="stylesheet" href="CSS/success.css"> <!---CSS LINK --->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> <!-- Jquery conect -->
	<script  type="text/javascript" src="js/script.js"></script> 
	<!--- Title in Browser--->
	<title>MobiStore</title>
</head>
<body>
	<button id = "to_top" onclick="topFunction()"><i class="fa fa-arrow-up" aria-hidden = "true"></i></button>
		<script src="js/to_top.js"></script>
		<!-- Header start -->
		<?php include_once 'php/header.php'; ?>
		<!-- Header end -->
        <section class="container">
            <div class="msg_box">
                <div class="msg">
                    <h2>Շնորհավոր!</h2>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <p>Շնորհակալություն, Ձեր պատվերը հաջողությամբ կատարվել է: Մեր առաքման թիմը ձեզ հետ կապ կհաստատի առաքման գործընթացի համաձայնության համար:</p>
                    <p class = "hint" >Դուք կստանաք էլեկտրոնային նամակ, վճարման մանրամասներով: Եթե ձեր գնման վերաբերյալ որեւէ հարց ունեք, խնդրում ենք<a href ="contact.php"> կապվել մեզ հետ </a></p>
                </div>
                <a href="assortment.php"><button class = "btn">Վերադառնալ Գլխավոր էջ</button></a>
            </div>
        </section>
        <!-- Footer start -->
        <?php include_once 'php/footer.php'; ?>
        <!-- Footer end -->
</body>
</html>