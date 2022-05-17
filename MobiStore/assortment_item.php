<?php
	session_start();
	include	'php/db_connect.php';
	include	'php/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include_once 'php/keywords.php' ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--- For adaptive --->
	<link rel="icon" type='images/png' href="IMG/icon.jpg"> <!---Browser`s icon LINK --->
	<link rel="stylesheet" href="CSS/assortment-item_style.css"> <!---CSS LINK --->
	<link rel="stylesheet" href="CSS/fontawesome/css/all.css"> <!-- Fa-fa conect -->
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> <!-- Jquery conect -->
	<script  type="text/javascript" src="js/script.js"></script> 
	<!--- Title in Browser--->
	<title>MobiStore</title>
</head>
<body>
	<button id = "to_top" onclick="topFunction()"><i class="fa fa-arrow-up" aria-hidden = "true"></i></button>
	<script src="js/to_top.js"></script> <!-- JS  Btn to top -->
	
		<!-- Header start -->
		<?php include_once 'php/header.php'; ?>
		<!-- Header end -->

		<!-- Content Start -->
		<section class="container">
					<?php
						@$id = $_SESSION['product']['id'];
						item_result($connection,'assortment','assortment_id',$id);
	
					?>
							<script src="js/ajax_product_id.js"></script>
							<script async src="js/form_handler.js"></script>

				
			</div>
		</section>
		<!-- Content End -->

	<!-- Footer start -->
	<?php include_once 'php/footer.php'; ?>
	<!-- Footer end -->
</body>
</html>