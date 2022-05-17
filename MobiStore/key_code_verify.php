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
					<a href="login.php"> <h2>Մուտք</h2> </a> 
					<a href = "register.php"> <h2  class= "register_link-title">Գրանցում</h2> </a>
				</div>
				<!-- Form for Signin -->
				<form action="php/send_key_for_reset.php" method="post">
                    <span>Մուտքագրել հաստատման կոդը</span>
					<div class="input_box">
						<i class="fa fa-key"></i>
						<input type="text" placeholder="Կոդը։ 7777" maxlength="4" name="key" >
					</div>
					<input type="submit" name = "confirm" class="btn" value="Հաստատել">
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
</body>
</html>