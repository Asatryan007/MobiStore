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
	<link rel="stylesheet" href="CSS/profile.css"> <!---CSS LINK --->
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
				<div class="about_user">

					<div class="avatar">
						<?php
						if($_SESSION['user']['gender'] === 'male'){
						
							print('<img src="img/icons/user.png" alt="Male-User">');
						}
						elseif($_SESSION['user']['gender'] === 'female'){
							print('<img src="img/icons/female.png" alt="Female-User">');
						}
						?>
					</div>
						<?php 
							$uid = $_SESSION['user']['id'];
							$user = mysqli_query($connection,"SELECT * FROM customer where customer_id = '$uid'");
							if(mysqli_num_rows($user) >0){
								$user_row = mysqli_fetch_assoc($user);
							}

						?>
						<!-- Personal info change start -->
					<div class="personal_info_changer">
						<h3>Անձնական տվյալներ</h3>
						<form action="php/configure_handler.php"  method="POST">
							<div class="form-group">
								<label >Անուն:</label>
								<input type="text" name = "name" class="config" value="<?php echo $user_row['name'] ?>" maxlength="25">
							</div>
							<div class="form-group">
								<label >Ազգանուն։</label>
								<input type="text" name = "surname" class="config" value="<?php echo $user_row['surname'] ?>" maxlength="25">
							</div>
							<div class="form-group">
								<label >Email:</label>
								<input type="email" name = "email" class="config" value="<?php echo $user_row['email'] ?>" maxlength="40">
							</div>
							
							<button type="submit" name = "save">Պահպանել</button>
							<button type="reset" name = "reset">Չեղարկել</button>
						</form>
						<!-- Personal info change end -->


						<!-- Password changes form start -->
						<h3>Փոխել գաղտնաբառը</h3>
						<div class = "pass_change">
							<p>Դուք կարող եք փոխել ձեր գաղտնաբառը, մուտքագրելով հին գաղտնաբառը, այնուհետև մուտքագրելով եւ հաստատելով նոր գաղտնաբառը:</p>
							<button id="change_pass" class = "mod_btn">Փոխել</button>				
						</div>
						
							<div id="myModal" class="modal">
								<!-- Modal content -->
								<div class="modal-content">
									<span class="close">&times;</span>
									<h3>Փոխել գաղտնաբառը</h3>
									<p>Մուտքագրեք ձեր ընթացիկ գաղտնաբառը, նոր գաղտնաբառը և կրկին մուտքագրեք նոր գաղտնաբառը, սխալները բացառելու համար:</p>
									<form action="php/configure_handler.php" method="post">
										<div class="pass_form">
											<label >Գործող գաղտնաբառը</label>
											<input type="password" name = "pass" class="config"  maxlength="25">
										</div>
										<div class="pass_form">
											<label >Նոր գաղտնաբառ</label>
											<input type="password" name = "new_pass" class="config"  maxlength="25">
										</div>
										<div class="pass_form">
											<label >Կրկնեք գաղտնաբառը</label>
											<input type="password" name = "c_n_pass" class="config"  maxlength="25">
										</div>
										<button type="submit" name="change" >Փոխել</button>
									</form>
									
								</div>
							</div>
						<script src="js/modal_wind.js"></script>
						
					</div>
					
						<!-- Password changes form end -->
				</div>
				
			</section>
			<?php
										if(@$_SESSION['message']) {
											echo '<p class = "msg">'. $_SESSION['message'] .'</p>';
										}
										unset($_SESSION['message']);
							?>
		</main>
		<!-- Content end -->
		<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
<!-- Footer end -->
</body>
</html>