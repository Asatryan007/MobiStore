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
	<!-- Content start -->
	<main>

		<section class="container">
			<div class="register-box">
				<div class="titles_cont">
					<a href="login.php"> <h2>Մուտք</h2> </a> 
					<a href="#" class="registr_link"> <h2 id="active" class = "register_link-title">Գրանցում</h2> </a>
				</div>
				<!-- SignUp form -->
				<form action="php/signup.php" method="post" enctype="multipart/form-data" >
					<div class="input_box">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Անուն" name="name" maxlength="22" required>
					</div>
					<div class="input_box">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Ազգանուն" name="surname" maxlength="22" required>
					</div>
					<div class="input_box">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" placeholder="E-mail" name="email" maxlength="50" required>
					</div>
						<div class="input_box">
							<label><input type="radio" name="gender" value="male">Արական</label>
							<label><input type="radio" name="gender" value="female">Իգական</label>
						</div>
					<div class="input_box">
						<i class="fa fa-user-circle" aria-hidden="true"></i>
						<input type="text" placeholder="Մուտքանուն" name="username" maxlength="22" required>
					</div>
					<div class="input_box">
						<i class="fa fa-lock"></i>
						<input type="password" placeholder="Գաղտնաբառ" name="password" maxlength="22" required>
					</div>
					<div class="input_box">
						<i class="fa fa-lock"></i>
						<input type="password" placeholder="Կրկնեք Գաղտնաբառը" name="password_confirm" maxlength="22" required>
					</div>
						<input type="submit" class="btn" value="Գրանցվել">
					
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
	<!-- Content end -->
<!-- Footer start -->
<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>