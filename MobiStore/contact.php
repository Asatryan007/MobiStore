<?php
	session_start();
	include	'php/db_connect.php';
	include	'php/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/contact.css"> <!---CSS LINK --->
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
	<main>

		<section class="container">
			<div class="contacts">
				<h3>Կոնտակտային Տվյալներ</h3>
				<p>Հեռ.: <a href="tel:+37494596003"> +374 77 007700</a></p>
				<p>E-mail: <a href="mailto:vardan.asatryan.02@mail.ru"> info@mobistore.am </a></p>

				<h4>Մենք Սոցիալական Կայքերում</h4>
				<ul class="social_media">
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>

			<div class="feedback">
				<h3>Հետադարձ Կապ</h3>
				
				<form id ="form" action="php/contact_handler.php" method="post">
					<div>
						<div class="input-box">
							<input type="email" class ="input input-email" name = "email" placeholder = "E-mail" >
							<input type="text" class ="input" name = "topic" placeholder = "Թեմա"  maxlength="40">
						</div>
						<textarea rows="10" cols="25" required name = "message" placeholder="Հաղորդագրություն"  maxlength="2000"></textarea>
					<?php if(@$_SESSION['user']){ ?>	
						<input type="submit" value="Ուղարկել">
						<?php }else{?>
						<input disabled type="submit" value="Ուղարկել">
						<?php print('<p class = "msg" >*Մուտք գործեք համակարգ հետադարձ կապ հաստատելու համար</p>'); }?>
							
					</div>
				</form>
				<script src="js/validate_form_contact.js"></script>
				<?php
						if(@$_SESSION['message']) {
							echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
						}
						unset($_SESSION['message']);
					?>
			</div>

			<div class="map">
				<h3>Մեր Հասցեն</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d762.1734020930935!2d44.51278952921643!3d40.171374998712146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc58b0b80d47%3A0x7ab4038211e2def2!2sZoravar%20Andranik!5e0!3m2!1sru!2s!4v1642877198087!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</section>

	</main>
<!-- Footer start -->
<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>