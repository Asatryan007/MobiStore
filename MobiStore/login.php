<?php
	session_start();
	include	'php/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/login.css"> <!---CSS LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
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

		<!-- Login form start -->
	<main>

		<section class="container">
			<div class="login-box">
				<div class="titles_cont">
					<a href="#"> <h2 id="active">Մուտք</h2> </a> 
					<a href = "register.php"> <h2  class= "register_link-title">Գրանցում</h2> </a>
				</div>
				<!-- Form for Signin -->
				<form action="php/signin.php" method="post">
					<div class="input_box">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Մուտքանուն" maxlength="22" name="login" >
					</div>
					<div class="input_box">
						<i class="fa fa-lock"></i>
						<input type="password" placeholder="Գաղտնաբառ" maxlength="22" name="password">
					</div>
					<div class="text-box"><a href="#popup" title="Գաղտնաբառի վերականգնում">Մոռացե՞լ եք</a></div>
					<input type="submit" class="btn" value="Մուտք Գործել">
					<?php
						if(@$_SESSION['message']) {
							echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
						}
						unset($_SESSION['message']);
					?>
				</form>
			</div>	
		</section>
		
	</main>
			<!-- Login form end-->
<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
	<div id="popup" class="popup container">
		<a href="#header" class="popup__area"></a>
		<div class="popup__body">
			<div class="popup__content">
				<a href="#header" class="popup__close">X</a>
				<h3 class="popup__title">Գաղտնաբառի վերականգնում</h3>
					<p class="about_reset">Մուտքագրեք այն էլ. փոստի հասցեն, որը նշել եք գրանցման ժամանակ և մենք կուղարկենք Ձեզ նամակ` գաղտնաբառի վերականգնման համար անհրաժեշտ հրահանգներով:
					</p>
					<form  class="forgot form"  action="php/send_key_for_reset.php" method="post">
						<input class = "input input-email" type="email" name = "email" placeholder="E-mail">
						<input type="submit" name = "submit" value="Ուղարկել">
					</form>
					<p class = "input_email"></p>
					<?php
						if(@$_SESSION['message_forgot']) {
							echo '<p class = "msg_forgot">'. $_SESSION['message_forgot'] .'</p>';
						}
						unset($_SESSION['message_forgot']);
					?>
					<script src="js/validate_email.js"></script>

			</div>
		</div>
	</div>
</body>
</html>